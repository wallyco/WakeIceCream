let _supplier_id = new Map();
let _category_id = new Map();
var option = document.createElement("option");
// var script = document.createElement('script');
// script.src = '/js/jquery.3.2.1.min.js'; // Check https://jquery.com/ for the current version
// document.getElementsByTagName('head')[0].appendChild(script);

function init(){
    refreshIDS()
}

function refreshIDS(){
    get_category_ids();
    get_supplier_ids();
}


function get_category_ids(){
    $.ajax({
        url: "../products/query_for_category.php",
        type: "GET",
        datatype: 'json',
        success:function(result){
            result=result.replace("[","");
            result=result.replace("]","");
            result=result.split("{").join("");
            result=result.split("}").join("");
            result=result.split("Category_Name").join("");
            result=result.split("Category_ID").join("");
            result=result.split(":").join("");
            result=result.split("\"").join("");
            var arr = new Array();
            arr=result.split(",");
            
            for(let i = 0; i < arr.length; i++){
                _category_id.set(arr[i],arr[i+1]);
                i++;
            }

            //Due to this being aync and the server locally hosted so it's slow, we need to set the map
            //here because we know there is data to be stored
            set_options_category_id();
        },
        error: function(){
            alert(result);
        }

    });
}

function get_supplier_ids(){
    $.ajax({
        url: "../products/query_for_supplier.php",
        type: "GET",
        datatype: 'json',
        success:function(result){

            result=result.replace("[","");
            result=result.replace("]","");
            result=result.split("{").join("");
            result=result.split("}").join("");
            result=result.split("Name").join("");
            result=result.split("Supplier_ID").join("");
            result=result.split(":").join("");
            result=result.split("\"").join("");
            var arr = new Array();
            arr=result.split(",");
            
            for(let i = 0; i < arr.length; i++){
                _supplier_id.set(arr[i],arr[i+1]);
                i++;
            }

            //Due to this being aync and the server locally hosted so it's slow, we need to set the map
            //here because we know there is data to be stored
            set_options_supplier_id();

        },
        error: function(){
            alert(result);
        }
        
    });
}

function set_options_supplier_id(){ 
    _supplier_option = document.getElementById("Supplier_ID");
    _supplier_id.forEach((value, key)=>{
        option = new Option();
        option.text = key + " : " + value; 
        option.value = value
        _supplier_option.add(option)
    });
}

function set_options_category_id(){ 
    _category_option = document.getElementById("Category_ID");
    _category_id.forEach((value, key)=>{
        option = new Option();
        option.text = value + " : " + key; 
        option.value = key
        _category_option.add(option)
    });  
}

//FORM DISPLAY

function add_supplier_id(){
    open_supplier_form();
}

function add_category_id(){
    open_category_form();
}


function open_supplier_form(){
    close_category_form();
    document.getElementById("supplier_id_form").style.visibility = "visible";
}

function close_supplier_form(){
    document.getElementById("supplier_id_form").style.visibility = "hidden";
}


function open_category_form(){
    close_supplier_form();
    document.getElementById("category_id_form").style.visibility = "visible";
}

function close_category_form(){
    document.getElementById("category_id_form").style.visibility = "hidden";
}


//DB ACCESS

function add_category_to_DB(cat_name, cat_desc){
        $.ajax({
        url: "php/create_category.php",
        type: "POST",
        datatype: 'json',
        data: {Category_Name: cat_name,
            Description: cat_desc
            },
        success:function(result){
            //Cant refresh keys since its not a set
        },
        error: function(){
            console.log("error");
        }
        });
}

function add_supplier_to_DB(
        sup_name,
        sup_address,
        sup_phone,
        sup_fax,
        sup_email,
        sup_comments,
    ){
        $.ajax({
            url: "php/create_supplier.php",
            type: "POST",
            datatype: 'json',
            data: {Name: sup_name,
                Address: sup_address,
                Phone: sup_phone,
                Fax: sup_fax,
                Email: sup_email,
                Comments: sup_comments
                },
            success:function(result){
                
            },
            error: function(){
                console.log("error");
            }
            });
    }

    function add_product_to_DB(
        _product_name,
        _product_Description,
        _product_unit,
        _product_price,
        _product_quantity,
        _product_status,
        _product_supp_id,
        _product_cat_id
    ){
        $.ajax({
            url: "php/create_product.php",
            type: "POST",
            datatype: 'json',
            data: {Product_Name: _product_name,
                   Description: _product_Description,
                   Product_Unit: _product_unit,
                   Product_Price: _product_price,
                   Product_Quantity: _product_quantity,
                   Product_Status: _product_status,
                   Supplier_ID: _product_supp_id,
                   Category_ID: _product_cat_id
                },
            success:function(result){
            
            },
            error: function(){
                console.log("error");
            }
            });
    }
