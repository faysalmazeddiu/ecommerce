@extends('admin.admin_master')
@section('main_content')
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
        <div class="box-icon">
            <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
            <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
            <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
        </div>
    </div>
    <h3 style="color:green">
    <?php
    $message=Session::get('message');
    if($message)
    {
        echo $message;
        Session::put('message',null);
    
    }
    ?>
</h3>
    <div class="box-content">
         {!! Form::open(['url' => '/save-product','method'=>'post','enctype'=>'multipart/form-data']) !!}
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Product Name </label>
                    <div class="controls">
                        <input type="text" name="product_name" class="span6 typeahead" id="typeahead"  >
                        
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Category Name</label>
                    <div class="controls">
                        <select name="category_id">
                            <option>Select Category</option>
                            <?php
                            foreach($category_info as $v_category)
                            {
                            ?>
                            <option value="{{$v_category->id}}">{{$v_category->category_name}}</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Manufacturer Name</label>
                    <div class="controls">
                        <select name="manufacturer_id">
                            <option>Select Manufacturer</option>
                            <?php
                            foreach($manufacturer_info as $v_manufacturer)
                            {
                            ?>
                            <option value="{{$v_manufacturer->id}}">{{$v_manufacturer->manufacturer_name}}</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Product Price</label>
                    <div class="controls">
                       <input type="number" name="product_price" class="span6 typeahead" id="typeahead"  >
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Product Quantity</label>
                    <div class="controls">
                       <input type="number" name="product_quantity" class="span6 typeahead" id="typeahead"  >
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Re-Order Label</label>
                    <div class="controls">
                       <input type="number" name="reorder_label" class="span6 typeahead" id="typeahead"  >
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="date01">Featured Product</label>
                    <div class="controls">
                        <input type="checkbox" name="is_featured"  >
                    </div>
                </div>
                    
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Product Short Description</label>
                    <div class="controls">
                        <textarea class="cleditor" name="product_short_description" id="textarea2" rows="3"></textarea>
                    </div>
                </div>
                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">Product Long Description</label>
                    <div class="controls">
                        <textarea class="cleditor" name="product_long_description" id="textarea2" rows="3"></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="fileInput">Product Image</label>
                    <div class="controls">
                        <input name="product_image" class="input-file uniform_on" id="fileInput" type="file">
                    </div>
                </div>   
                <div class="control-group">
                    <label class="control-label" for="date01">Publication Status</label>
                    <div class="controls">
                        <select name="publication_status">
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
        {!! Form::close() !!}

    </div>
</div><!--/span-->
@endsection
