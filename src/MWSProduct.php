<?php 
namespace MCS;

use Exception;

class MWSProduct{
    public $feed_product_type;
    public $item_sku;
    public $brand_name;
    public $item_name;
    public $external_product_id;
    public $external_product_id_type;
    public $item_type;
    public $outer_material_type1;
    public $outer_material_type2;
    public $outer_material_type3;
    public $outer_material_type4;
    public $outer_material_type5;
    public $color_name;
    public $color_map;
    public $size_name;
    public $size_map;
    public $is_adult_product;
    public $material_composition1;
    public $material_composition2;
    public $material_composition3;
    public $material_composition4;
    public $material_composition5;
    public $material_composition6;
    public $material_composition7;
    public $material_composition8;
    public $material_composition9;
    public $material_composition10;
    public $department_name;
    public $standard_price;
    public $quantity;
    public $merchant_shipping_group_name;
    public $main_image_url;
    public $other_image_url1;
    public $other_image_url2;
    public $other_image_url3;
    public $parent_child;
    public $parent_sku;
    public $relationship_type;
    public $variation_theme;
    public $update_delete;
    public $product_description;
    public $closure_type;
    public $model;
    public $part_number;
    public $manufacturer;
    public $bullet_point1;
    public $bullet_point2;
    public $bullet_point3;
    public $bullet_point4;
    public $bullet_point5;
    public $generic_keywords1;
    public $generic_keywords2;
    public $generic_keywords3;
    public $generic_keywords4;
    public $generic_keywords5;
    public $fit_type;
    public $neck_size;
    public $neck_size_unit_of_measure;
    public $neck_style;
    public $special_size_type;
    public $theme;
    public $material_type;
    public $website_shipping_weight;
    public $website_shipping_weight_unit_of_measure;
    public $item_length;
    public $item_width;
    public $item_height;
    public $item_dimensions_unit_of_measure;
    public $fulfillment_center_id;
    public $package_height;
    public $package_width;
    public $package_length;
    public $package_weight;
    public $package_weight_unit_of_measure;
    public $package_dimensions_unit_of_measure;
    public $cpsia_cautionary_statement;
    public $cpsia_cautionary_description;
    public $fabric_type;
    public $import_designation;
    public $item_weight_unit_of_measure;
    public $item_weight;
    public $country_of_origin;
    public $batteries_required;
    public $are_batteries_included;
    public $battery_cell_composition;
    public $battery_type1;
    public $battery_type2;
    public $battery_type3;
    public $number_of_batteries1;
    public $number_of_batteries2;
    public $number_of_batteries3;
    public $battery_weight;
    public $battery_weight_unit_of_measure;
    public $number_of_lithium_metal_cells;
    public $number_of_lithium_ion_cells;
    public $lithium_battery_packaging;
    public $lithium_battery_energy_content;
    public $lithium_battery_energy_content_unit_of_measure;
    public $lithium_battery_weight;
    public $lithium_battery_weight_unit_of_measure;
    public $supplier_declared_dg_hz_regulation1;
    public $supplier_declared_dg_hz_regulation2;
    public $supplier_declared_dg_hz_regulation3;
    public $supplier_declared_dg_hz_regulation4;
    public $supplier_declared_dg_hz_regulation5;
    public $hazmat_united_nations_regulatory_id;
    public $safety_data_sheet_url;
    public $item_volume;
    public $item_volume_unit_of_measure;
    public $flash_point;
    public $ghs_classification_class1;
    public $ghs_classification_class2;
    public $ghs_classification_class3;
    public $california_proposition_65_compliance_type;
    public $california_proposition_65_chemical_names1;
    public $california_proposition_65_chemical_names2;
    public $california_proposition_65_chemical_names3;
    public $california_proposition_65_chemical_names4;
    public $california_proposition_65_chemical_names5;
    public $list_price;
    public $condition_type;
    public $condition_note;
    public $product_tax_code;
    public $fulfillment_latency;
    public $product_site_launch_date;
    public $merchant_release_date;
    public $restock_date;
    public $sale_price;
    public $sale_from_date;
    public $sale_end_date;
    public $offering_end_date;
    public $max_aggregate_ship_quantity;
    public $item_package_quantity;
    public $number_of_items;
    public $offering_can_be_gift_messaged;
    public $offering_can_be_giftwrapped;
    public $is_discontinued_by_manufacturer;
    public $missing_keyset_reason;
    public $max_order_quantity;
    public $offering_start_date;

    public $sku;
    public $price;
    public $product_id;
    public $product_id_type;
    public $ASIN_hint='';
    public $title='';
    public $operation_type='';
    public $sale_start_date='';
    public $leadtime_to_ship='';
    public $launch_date='';
    public $is_giftwrap_available='';
    public $is_gift_message_available='';
    public $offer_image1='';
    public $offer_image2='';
    public $offer_image3='';
    public $offer_image4='';
    public $offer_image5='';

    //2018版本的
    public $swatch_image_url;
    public $main_offer_image;
    public $offer_image;
    public $subject_character;




    private $validation_errors = [];
    
    private $conditions = [
        'New', 'Refurbished', 'UsedLikeNew', 
        'UsedVeryGood', 'UsedGood', 'UsedAcceptable'
    ];
    
    public function __construct(array $array = [])
    {
        foreach ($array as $property => $value) {
            $this->{$property} = $value;
        }
    }
    
    public function getValidationErrors()
    {
        return $this->validation_errors;   
    }
    
    public function toArray($template='knits_tees_womens')
    {

        switch ($template){
            case "knits_tees_womens":
              return [
                  'feed_product_type'=>$this->feed_product_type,
                  'item_sku'=>$this->item_sku,
                  'brand_name'=>$this->brand_name,
                  'item_name'=>$this->item_name,
                  'external_product_id'=>$this->external_product_id,
                  'external_product_id_type'=>$this->external_product_id_type,
                  'item_type'=>$this->item_type,
                  'outer_material_type1'=>$this->outer_material_type1,
                  'outer_material_type2'=>$this->outer_material_type2,
                  'outer_material_type3'=>$this->outer_material_type3,
                  'outer_material_type4'=>$this->outer_material_type4,
                  'outer_material_type5'=>$this->outer_material_type5,
                  'color_name'=>$this->color_name,
                  'color_map'=>$this->color_map,
                  'size_name'=>$this->size_name,
                  'size_map'=>$this->size_map,
                  'is_adult_product'=>$this->is_adult_product,
                  'material_composition1'=>$this->material_composition1,
                  'material_composition2'=>$this->material_composition2,
                  'material_composition3'=>$this->material_composition3,
                  'material_composition4'=>$this->material_composition4,
                  'material_composition5'=>$this->material_composition5,
                  'material_composition6'=>$this->material_composition6,
                  'material_composition7'=>$this->material_composition7,
                  'material_composition8'=>$this->material_composition8,
                  'material_composition9'=>$this->material_composition9,
                  'material_composition10'=>$this->material_composition10,
                  'department_name'=>$this->department_name,
                  'standard_price'=>$this->standard_price,
                  'quantity'=>$this->quantity,
                  'merchant_shipping_group_name'=>$this->merchant_shipping_group_name,
                  'main_image_url'=>$this->main_image_url,
                  'other_image_url1'=>$this->other_image_url1,
                  'other_image_url2'=>$this->other_image_url2,
                  'other_image_url3'=>$this->other_image_url3,
                  'parent_child'=>$this->parent_child,
                  'parent_sku'=>$this->parent_sku,
                  'relationship_type'=>$this->relationship_type,
                  'variation_theme'=>$this->variation_theme,
                  'update_delete'=>$this->update_delete,
                  'product_description'=>$this->product_description,
                  'closure_type'=>$this->closure_type,
                  'model'=>$this->model,
                  'part_number'=>$this->part_number,
                  'manufacturer'=>$this->manufacturer,
                  'bullet_point1'=>$this->bullet_point1,
                  'bullet_point2'=>$this->bullet_point2,
                  'bullet_point3'=>$this->bullet_point3,
                  'bullet_point4'=>$this->bullet_point4,
                  'bullet_point5'=>$this->bullet_point5,
                  'generic_keywords1'=>$this->generic_keywords1,
                  'generic_keywords2'=>$this->generic_keywords2,
                  'generic_keywords3'=>$this->generic_keywords3,
                  'generic_keywords4'=>$this->generic_keywords4,
                  'generic_keywords5'=>$this->generic_keywords5,
                  'fit_type'=>$this->fit_type,
                  'neck_size'=>$this->neck_size,
                  'neck_size_unit_of_measure'=>$this->neck_size_unit_of_measure,
                  'neck_style'=>$this->neck_style,
                  'special_size_type'=>$this->special_size_type,
                  'theme'=>$this->theme,
                  'material_type'=>$this->material_type,
                  'website_shipping_weight'=>$this->website_shipping_weight,
                  'website_shipping_weight_unit_of_measure'=>$this->website_shipping_weight_unit_of_measure,
                  'item_length'=>$this->item_length,
                  'item_width'=>$this->item_width,
                  'item_height'=>$this->item_height,
                  'item_dimensions_unit_of_measure'=>$this->item_dimensions_unit_of_measure,
                  'fulfillment_center_id'=>$this->fulfillment_center_id,
                  'package_height'=>$this->package_height,
                  'package_width'=>$this->package_width,
                  'package_length'=>$this->package_length,
                  'package_weight'=>$this->package_weight,
                  'package_weight_unit_of_measure'=>$this->package_weight_unit_of_measure,
                  'package_dimensions_unit_of_measure'=>$this->package_dimensions_unit_of_measure,
                  'cpsia_cautionary_statement'=>$this->cpsia_cautionary_statement,
                  'cpsia_cautionary_description'=>$this->cpsia_cautionary_description,
                  'fabric_type'=>$this->fabric_type,
                  'import_designation'=>$this->import_designation,
                  'item_weight_unit_of_measure'=>$this->item_weight_unit_of_measure,
                  'item_weight'=>$this->item_weight,
                  'country_of_origin'=>$this->country_of_origin,
                  'batteries_required'=>$this->batteries_required,
                  'are_batteries_included'=>$this->are_batteries_included,
                  'battery_cell_composition'=>$this->battery_cell_composition,
                  'battery_type1'=>$this->battery_type1,
                  'battery_type2'=>$this->battery_type2,
                  'battery_type3'=>$this->battery_type3,
                  'number_of_batteries1'=>$this->number_of_batteries1,
                  'number_of_batteries2'=>$this->number_of_batteries2,
                  'number_of_batteries3'=>$this->number_of_batteries3,
                  'battery_weight'=>$this->battery_weight,
                  'battery_weight_unit_of_measure'=>$this->battery_weight_unit_of_measure,
                  'number_of_lithium_metal_cells'=>$this->number_of_lithium_metal_cells,
                  'number_of_lithium_ion_cells'=>$this->number_of_lithium_ion_cells,
                  'lithium_battery_packaging'=>$this->lithium_battery_packaging,
                  'lithium_battery_energy_content'=>$this->lithium_battery_energy_content,
                  'lithium_battery_energy_content_unit_of_measure'=>$this->lithium_battery_energy_content_unit_of_measure,
                  'lithium_battery_weight_unit_of_measure'=>$this->lithium_battery_weight_unit_of_measure,
                  'supplier_declared_dg_hz_regulation1'=>$this->supplier_declared_dg_hz_regulation1,
                  'supplier_declared_dg_hz_regulation2'=>$this->supplier_declared_dg_hz_regulation2,
                  'supplier_declared_dg_hz_regulation3'=>$this->supplier_declared_dg_hz_regulation3,
                  'supplier_declared_dg_hz_regulation4'=>$this->supplier_declared_dg_hz_regulation4,
                  'supplier_declared_dg_hz_regulation5'=>$this->supplier_declared_dg_hz_regulation5,
                  'hazmat_united_nations_regulatory_id'=>$this->hazmat_united_nations_regulatory_id,
                  'safety_data_sheet_url'=>$this->safety_data_sheet_url,
                  'item_volume'=>$this->item_volume,
                  'item_volume_unit_of_measure'=>$this->item_volume_unit_of_measure,
                  'flash_point'=>$this->flash_point,
                  'ghs_classification_class1'=>$this->ghs_classification_class1,
                  'ghs_classification_class2'=>$this->ghs_classification_class2,
                  'ghs_classification_class3'=>$this->ghs_classification_class3,
                  'california_proposition_65_compliance_type'=>$this->california_proposition_65_compliance_type,
                  'california_proposition_65_chemical_names1'=>$this->california_proposition_65_chemical_names1,
                  'california_proposition_65_chemical_names2'=>$this->california_proposition_65_chemical_names2,
                  'california_proposition_65_chemical_names3'=>$this->california_proposition_65_chemical_names3,
                  'california_proposition_65_chemical_names4'=>$this->california_proposition_65_chemical_names4,
                  'california_proposition_65_chemical_names5'=>$this->california_proposition_65_chemical_names5,
                  'list_price'=>$this->list_price,
                  'condition_type'=>$this->condition_type,
                  'condition_note'=>$this->condition_note,
                  'product_tax_code'=>$this->product_tax_code,
                  'fulfillment_latency'=>$this->fulfillment_latency,
                  'product_site_launch_date'=>$this->product_site_launch_date,
                  'merchant_release_date'=>$this->merchant_release_date,
                  'restock_date'=>$this->restock_date,
                  'sale_price'=>$this->sale_price,
                  'sale_from_date'=>$this->sale_from_date,
                  'sale_end_date'=>$this->sale_end_date,
                  'offering_end_date'=>$this->offering_end_date,
                  'max_aggregate_ship_quantity'=>$this->max_aggregate_ship_quantity,
                  'item_package_quantity'=>$this->item_package_quantity,
                  'number_of_items'=>$this->number_of_items,
                  'offering_can_be_gift_messaged'=>$this->offering_can_be_gift_messaged,
                  'offering_can_be_giftwrapped'=>$this->offering_can_be_giftwrapped,
                  'is_discontinued_by_manufacturer'=>$this->is_discontinued_by_manufacturer,
                  'missing_keyset_reason'=>$this->missing_keyset_reason,
                  'max_order_quantity'=>$this->max_order_quantity,
                  'offering_start_date'=>$this->offering_start_date
              ];
                break;
            default:
                return [
                    'item_type'=>$this->item_type,
                    'item_sku'=>$this->item_sku,
                    'external_product_id'=>$this->external_product_id,
                    'external_product_id_type'=>$this->external_product_id_type,
                    'brand_name'=>$this->brand_name,
                    'item_name'=>$this->item_name,
                    'manufacturer'=>$this->manufacturer,
                    'part_number'=>$this->part_number,
                    'color_name'=>$this->color_name,
                    'color_map'=>$this->color_map,
                    'department_name'=>$this->department_name,
                    'standard_price'=>$this->standard_price,
                    'quantity'=>$this->quantity,
                    'merchant_shipping_group_name'=>$this->merchant_shipping_group_name,
                    'main_image_url'=>$this->main_image_url,
                    'other_image_url1'=>$this->other_image_url1,
                    'other_image_url2'=>$this->other_image_url2,
                    'other_image_url3'=>$this->other_image_url3,
                    'swatch_image_url'=>$this->swatch_image_url,
                    'main_offer_image'=>$this->main_offer_image,
                    'offer_image'=>$this->offer_image,
                    'parent_child'=>$this->parent_child,
                    'parent_sku'=>$this->parent_sku,
                    'relationship_type'=>$this->relationship_type,
                    'variation_theme'=>$this->variation_theme,
                    'product_description'=>$this->product_description,
                    'feed_product_type'=>$this->feed_product_type,
                    'model'=>$this->model,
                    'update_delete'=>$this->update_delete,
                    'bullet_point1'=>$this->bullet_point1,
                    'bullet_point2'=>$this->bullet_point2,
                    'bullet_point3'=>$this->bullet_point3,
                    'bullet_point4'=>$this->bullet_point4,
                    'bullet_point5'=>$this->bullet_point5,
                    'generic_keywords1'=>$this->generic_keywords1,
                    'generic_keywords2'=>$this->generic_keywords2,
                    'generic_keywords3'=>$this->generic_keywords3,
                    'generic_keywords4'=>$this->generic_keywords4,
                    'generic_keywords5'=>$this->generic_keywords5,
                    'subject_character'=>$this->subject_character,
                    'size_name'=>$this->size_name,
                ];
                break;

        }

    }

    
    public function validate()
    {
        if (mb_strlen($this->item_sku) < 1 or strlen($this->item_sku) > 40) {
            $this->validation_errors['item_sku'] = 'Should be longer then 1 character and shorter then 40 characters';
        }
        
        $this->standard_price = str_replace(',', '.', $this->standard_price);
        
        $exploded_price = explode('.', $this->standard_price);
        
        if (count($exploded_price) == 2) {
            if (mb_strlen($exploded_price[0]) > 18) { 
                $this->validation_errors['standard_price'] = 'Too high';
            } else if (mb_strlen($exploded_price[1]) > 2) {
                $this->validation_errors['standard_price'] = 'Too many decimals';
            }
        } else {
            $this->validation_errors['standard_price'] = 'Looks wrong';
        }
        
        $this->quantity = (int) $this->quantity;
        $this->external_product_id = (string) $this->external_product_id;
        
        $product_id_length = mb_strlen($this->external_product_id);
        
        switch ($this->external_product_id_type) {
            case 'ASIN':
                if ($product_id_length != 10) {
                    $this->validation_errors['external_product_id'] = 'ASIN should be 10 characters long';
                }
                break;
            case 'UPC':
                if ($product_id_length != 12) {
                    $this->validation_errors['external_product_id'] = 'UPC should be 12 characters long';
                }
                break;
            case 'EAN':
                if ($product_id_length != 13) {
                    $this->validation_errors['external_product_id'] = 'EAN should be 13 characters long';
                }
                break;
            default:
               $this->validation_errors['external_product_id_type'] = 'Not one of: ASIN,UPC,EAN';
        }
        
        if (!in_array($this->condition_type, $this->conditions)) {
            $this->validation_errors['condition_type'] = 'Not one of: ' . implode($this->conditions, ',');                
        }
        
        if ($this->condition_type != 'New') {
            $length = mb_strlen($this->condition_note);
            if ($length < 1) {
                $this->validation_errors['condition_note'] = 'Required if condition_type not is New';                    
            } else if ($length > 1000) {
                $this->validation_errors['condition_note'] = 'Should not exceed 1000 characters';                    
            }
        }
        
        if (count($this->validation_errors) > 0) {
            return false;    
        } else {
            return true;    
        }
    }
    
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }    
}
