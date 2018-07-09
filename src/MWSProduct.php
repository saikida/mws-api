<?php 
namespace MCS;

use Exception;

class MWSProduct{

    public $sku;
    public $price;
    public $product_id;
    public $product_id_type;
    public $condition_type = 'New';
    public $condition_note='';
    public $ASIN_hint='';
    public $title='';
    public $product_tax_code='';
    public $operation_type='';
    public $sale_price='';
    public $sale_start_date='';
    public $sale_end_date='';
    public $leadtime_to_ship='';
    public $launch_date='';
    public $is_giftwrap_available='';
    public $is_gift_message_available='';
    public $fulfillment_center_id='';
    public $offer_image1='';
    public $offer_image2='';
    public $offer_image3='';
    public $offer_image4='';
    public $offer_image5='';

    //2018版本的
    public $item_type;        //分类
    public $item_sku;         //sku名
    public $external_product_id; //UPC码
    public $external_product_id_type; //UPC ASIN
    public $brand_name; //品牌名
    public $item_name; //节点名
    public $manufacturer; //节点名
    public $part_number; //节点名
    public $color_name; //节点名
    public $color_map; //节点名
    public $department_name; //节点名
    public $standard_price; //节点名
    public $quantity; //节点名
    public $merchant_shipping_group_name; //节点名
    public $main_image_url;
    public $other_image_url1;
    public $other_image_url2;
    public $other_image_url3;
    public $swatch_image_url;
    public $main_offer_image;
    public $offer_image;
    public $parent_child;
    public $parent_sku;
    public $relationship_type;
    public $variation_theme;
    public $product_description;
    public $feed_product_type;
    public $model;
    public $update_delete;
    public $bullet_point1;
    public $bullet_point2;
    public $bullet_point3;
    public $bullet_point4;
    public $bullet_point5;
    public $generic_keywords1; //关键词
    public $generic_keywords2;
    public $generic_keywords3;
    public $generic_keywords4;
    public $generic_keywords5;
    public $subject_character;
    public $size_name;



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
    
    public function toArray()
    {
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
