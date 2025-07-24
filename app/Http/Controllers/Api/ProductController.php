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
    function saveProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ITEMID' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => implode(",", $validator->errors()->all())], 400);
        }

        try {

            // Assuming you have a Product model to handle the database operations
            $product = Product::create([
                'ITEMID' => $request->ITEMID,
                'SuppRefNo' => $request->SuppRefNo,
                'Suppliers_Ref_Number' => $request->Suppliers_Ref_Number,
                'ITEMNAME' => $request->ITEMNAME,
                'Search_Name' => $request->Search_Name,
                'Parent_Item' => $request->Parent_Item,
                'PG_Percentage' => $request->PG_Percentage,
                'Std_Weight_Pcs' => $request->Std_Weight_Pcs,
                'Making_Code' => $request->Making_Code,
                'Comp_Calc_Type' => $request->Comp_Calc_Type,
                'Making_Type' => $request->Making_Type,
                'Sale_Calculation_Type_Gross' => $request->Sale_Calculation_Type_Gross,
                'Item_Group' => $request->Item_Group,
                'Item_Type' => $request->Item_Type,
                'Flat_Rate' => $request->Flat_Rate,
                'Pair_No' => $request->Pair_No,
                'Hold' => $request->Hold,
                'EJRL_Vend_Account' => $request->EJRL_Vend_Account,
                'U_O_M' => $request->U_O_M,
                'Article_Group' => $request->Article_Group,
                'HUID_Number' => $request->HUID_Number,
                'Is_Consignment' => $request->Is_Consignment,
                'EJ_Product_Type' => $request->EJ_Product_Type,
                'SKU_Code' => $request->SKU_Code,
                'Label_Type' => $request->Label_Type,
                'Exclude_Making_Disc' => $request->Exclude_Making_Disc,
                'SKU_Description' => $request->SKU_Description,
                'Pcs' => $request->Pcs,
                'Dust' => $request->Dust,
                'LOF_Wastage' => $request->LOF_Wastage,
                'Scrap' => $request->Scrap,
                'Loss' => $request->Loss,
                'Ornament' => $request->Ornament,
                'Loose' => $request->Loose,
                'Retail' => $request->Retail,
                'Franchisee' => $request->Franchisee,
                'Cost_Group' => $request->Cost_Group,
                'Inventory_Model_Group' => $request->Inventory_Model_Group,
                'Dimension_Group' => $request->Dimension_Group,
                'Coverage_Group' => $request->Coverage_Group,
                'Commission_Group' => $request->Commission_Group,
                'Batch_Number_Group' => $request->Batch_Number_Group,
                'Serial_Number_Group' => $request->Serial_Number_Group,
                'Buyer_Group' => $request->Buyer_Group,
                'Packing_Group' => $request->Packing_Group,
                'Item_Price_Tolerance_Group' => $request->Item_Price_Tolerance_Group,
                'TCS_Trans_Type' => $request->TCS_Trans_Type,
                'Counting_Group' => $request->Counting_Group,
                'Default_Configuration' => $request->Default_Configuration,
                'Default_Vendor' => $request->Default_Vendor,
                'Configurable' => $request->Configurable,
                'Identical' => $request->Identical,
                'Autocreate_Combinations' => $request->Autocreate_Combinations,
                'Use_Combination_Cost_Price' => $request->Use_Combination_Cost_Price,
                'Size' => $request->Size,
                'Code' => $request->Code,
                'Batch_Number' => $request->Batch_Number,
                'Batch_Number_Sequence' => $request->Batch_Number_Sequence,
                'Bulk_Receive_Batch_No_Sequence' => $request->Bulk_Receive_Batch_No_Sequence,
                'Article_Code' => $request->Article_Code,
                'Ingredient_Code' => $request->Ingredient_Code,
                'Gift_Amount' => $request->Gift_Amount,
                'Silver_Name' => $request->Silver_Name,
                'Gender' => $request->Gender,
                'Inventory_Unit' => $request->Inventory_Unit,
                'Volume' => $request->Volume,
                'Packing_Quantity' => $request->Packing_Quantity,
                'Net_Weight' => $request->Net_Weight,
                'Tare_Weight' => $request->Tare_Weight,
                'Gross_Depth' => $request->Gross_Depth,
                'Gross_Width' => $request->Gross_Width,
                'Gross_Height' => $request->Gross_Height,
                'Sort_Code' => $request->Sort_Code,
                'Arrival_Handling_Time' => $request->Arrival_Handling_Time,
                'Item_Tagging_Level' => $request->Item_Tagging_Level,
                'CZ_Item' => $request->CZ_Item,
                'Gift_Item' => $request->Gift_Item,
                'Apply_Credit_Card_Charges' => $request->Apply_Credit_Card_Charges,
                'Repair_Item' => $request->Repair_Item,
                'Purchase_Unit' => $request->Purchase_Unit,
                'Misc_Charges_Group' => $request->Misc_Charges_Group,
                'Item_Sales_Tax_Group' => $request->Item_Sales_Tax_Group,
                'Overdelivery' => $request->Overdelivery,
                'Underdelivery' => $request->Underdelivery,
                'Intercompany_Stopped' => $request->Intercompany_Stopped,
                'BOM_Unit' => $request->BOM_Unit,
                'Constant_Scrap' => $request->Constant_Scrap,
                'Variable_Scrap' => $request->Variable_Scrap,
                'Level' => $request->Level,
                'Phantom' => $request->Phantom,
                'Auto_Report_as_Finished' => $request->Auto_Report_as_Finished,
                'Sales_Unit' => $request->Sales_Unit,
                'Production_Pool' => $request->Production_Pool,
                'Production_Group' => $request->Production_Group,
                'Arrival' => $request->Arrival,
                'Flushing_Principle' => $request->Flushing_Principle,
                'Category' => $request->Category,
                'Calculation_Group' => $request->Calculation_Group,
                'Stop_Explosion' => $request->Stop_Explosion,
                'Vendor' => $request->Vendor,
                'Service_Code' => $request->Service_Code,
                'Price' => $request->Price,
                'Max_Retail_Price' => $request->Max_Retail_Price,
                'Price_Unit' => $request->Price_Unit,
                'Price_Misc_Charges' => $request->Price_Misc_Charges,
                'Price_Quantity' => $request->Price_Quantity,
                'Date_of_Price' => $request->Date_of_Price,
                'Incl_in_Unit_Price' => $request->Incl_in_Unit_Price,
                'Line_Discount' => $request->Line_Discount,
                'Multiline_Discount' => $request->Multiline_Discount,
                'Total_Discount' => $request->Total_Discount,
                'Supplementary_Item_Group' => $request->Supplementary_Item_Group,
                'Max_Weight_Pcs' => $request->Max_Weight_Pcs,
                'Min_Weight_Pcs' => $request->Min_Weight_Pcs,
                'Tolerance_Percentage' => $request->Tolerance_Percentage,
                'Company_Item' => $request->Company_Item,
                'Use_' => $request->Use_,
                'Alternative_Item_Number' => $request->Alternative_Item_Number,
                'Configuration' => $request->Configuration,
                'ABC_code_Value' => $request->ABC_code_Value,
                'ABC_code_Margin' => $request->ABC_code_Margin,
                'ABC_code_Revenue' => $request->ABC_code_Revenue,
                'ABC_code_Carrying_Cost' => $request->ABC_code_Carrying_Cost,
                'Commodity' => $request->Commodity,
                'Additional_Units' => $request->Additional_Units,
                'Country_Region' => $request->Country_Region,
                'State' => $request->State,
                'Height' => $request->Height,
                'Width' => $request->Width,
                'Depth' => $request->Depth,
                'Density' => $request->Density,
                'Department' => $request->Department,
                'Cost_Center' => $request->Cost_Center,
                'Purpose' => $request->Purpose,
                'Line_of_Business' => $request->Line_of_Business,
                'Brand' => $request->Brand,
                'Employee' => $request->Employee,
                'Opening_Balance' => $request->Opening_Balance,
                'Finishing_Type' => $request->Finishing_Type,
                'Plating_Type' => $request->Plating_Type,
                'Product_Type' => $request->Product_Type,
                'Setting_Type' => $request->Setting_Type,
                'Manufacturing_Type' => $request->Manufacturing_Type,
                'Style' => $request->Style,
                'Theme' => $request->Theme,
                'Collection' => $request->Collection,
                'Product_Group' => $request->Product_Group,
                'Product_Category' => $request->Product_Category,
                'Class' => $request->Class,
                'Gold_Project_Types' => $request->Gold_Project_Types,
                'Gender1' => $request->Gender1,
                'Weight_Range' => $request->Weight_Range,
                'Division' => $request->Division,
                'Weight_Band' => $request->Weight_Band,
                'Staple_Flag' => $request->Staple_Flag,
                'New_SKU' => $request->New_SKU,
                'Text' => $request->Text,
                'Sketch_ID' => $request->Sketch_ID,
                'Total_Discount1' => $request->Total_Discount1,
                'Sample_Item' => $request->Sample_Item,
                'FootFall_Trans_Type' => $request->FootFall_Trans_Type,
                'Gross_Weight' => $request->Gross_Weight,
                'Import_Tariff_Code' => $request->Import_Tariff_Code,
                'Export_Tariff_Code' => $request->Export_Tariff_Code,
                'Excise_Tariff_Code' => $request->Excise_Tariff_Code,
                'Quality_Code' => $request->Quality_Code,
                'Diamond_Row_Code' => $request->Diamond_Row_Code,
                'Dial_Colour_Code' => $request->Dial_Colour_Code,
                'Strap_Material_Code' => $request->Strap_Material_Code,
                'Strap_Colour_Code' => $request->Strap_Colour_Code,
                'Hand_Code' => $request->Hand_Code,
                'Type_Code' => $request->Type_Code,
                'Watch_Complexity' => $request->Watch_Complexity,
                'Latest_Purchase_Price' => $request->Latest_Purchase_Price,
                'Latest_Cost_Price' => $request->Latest_Cost_Price,
                'Sales_Price_Model' => $request->Sales_Price_Model,
                'Base_Price' => $request->Base_Price,
                'Contribution_Ratio' => $request->Contribution_Ratio,
                'Misc_Charges_Pct' => $request->Misc_Charges_Pct,
                'Name_Alias_Text' => $request->Name_Alias_Text,
                'Silver_Category_Name' => $request->Silver_Category_Name
            ]);

            if ($product) {
                return response()->json([
                    'itemId' => $request->ITEMID,
                    'status' => true,
                    'message' => 'Product created successfully'
                ], 200);
            } else {
                return response()->json([
                    'itemId' => $request->ITEMID,
                    'status' => false,
                    'message' => 'Product insertion failed'
                ], 500);
            }
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }

    public function updateProductImage(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'ITEMID' => 'required', // Adjust validation rules as needed
            ]);

            if ($validator->fails()) {
                return response()->json(['status' => false, 'message' => implode(",", $validator->errors()->all())], 400);
            }

            $itemId = $request->ITEMID;

            $updated = Product::where('ITEMID', $itemId)
                ->update(['ITEMIMAGE' => $request->ITEMIMAGE]);

            if ($updated) {
                return response()->json([
                    'itemId' => $itemId,
                    'status' => true,
                    'message' => 'Product image updated successfully'
                ], 200);
            } else {
                return response()->json([
                    'itemId' => $itemId,
                    'status' => false,
                    'message' => 'There is not any product with this ITEMID'
                ], 400); // Bad Request or 404 depending on context
            }
        } catch (Exception $e) {
            // Optional: log the error for debugging
            Log::error('Product image update error: ' . $e->getMessage());

            return response()->json([
                'itemId' => $itemId,
                'status' => false,
                'message' => 'An error occurred while updating the product image',
                'error' => $e->getMessage(), // You can remove this in production
            ], 500);
        }
    }
}
