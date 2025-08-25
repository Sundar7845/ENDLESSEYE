<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function saveProduct(Request $request)
    {
        $products = $request->all();

        if (!is_array($products)) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid data format. Expected an array of products.'
            ], 400);
        }

        $inserted = [];
        $errors = [];

        foreach ($products as $index => $productData) {
            $validator = Validator::make($productData, [
                'ITEMID' => 'required|string',
                // Add more field rules as needed
            ]);

            if ($validator->fails()) {
                $errors[] = [
                    'index' => $index,
                    'ITEMID' => $productData['ITEMID'] ?? null,
                    'errors' => $validator->errors()->all(),
                ];
                continue;
            }

            try {
                $product = Product::create($productData);
                $inserted[] = [
                    'status' => $product ? true : false,
                    'index' => $index,
                    'ITEMID' => $product->ITEMID,
                    'message' => 'Inserted successfully'
                ];
            } catch (\Exception $e) {
                $errors[] = [
                    'index' => $index,
                    'ITEMID' => $productData['ITEMID'] ?? null,
                    'errors' => ['Database error: ' . $e->getMessage()]
                ];
            }
        }

        return response()->json([
            'status' => true,
            'inserted_count' => count($inserted),
            'failed_count' => count($errors),
            'inserted' => $inserted,
            'errors' => $errors,
            'message' => 'Processing completed.'
        ], 200);
    }

    public function updateProductImage(Request $request)
    {
        try {
            $products = $request->all();

            if (!is_array($products)) {
                return response()->json([
                    'status' => false,
                    'message' => 'Invalid input. Expected an array of products.'
                ], 400);
            }

            $results = [];

            foreach ($products as $productData) {
                $itemId = $productData['ITEMID'] ?? null;
                $itemImage = $productData['ITEMIMAGE'] ?? null;

                if (!$itemId) {
                    $results[] = [
                        'ITEMID' => null,
                        'status' => false,
                        'message' => 'ITEMID is missing'
                    ];
                    continue;
                }

                $updated = Product::where('ITEMID', $itemId)
                    ->update(['ITEMIMAGE' => $itemImage]);

                $results[] = [
                    'ITEMID' => $itemId,
                    'status' => $updated ? true : false,
                    'message' => $updated ? 'Updated successfully' : 'ITEMID not found'
                ];
            }

            return response()->json([
                'status' => true,
                'message' => 'Update process completed',
                'data' => $results
            ], 200);
        } catch (Exception $e) {
            Log::error('Product image update error: ' . $e->getMessage());

            return response()->json([
                'status' => false,
                'message' => 'An error occurred while updating product images',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
