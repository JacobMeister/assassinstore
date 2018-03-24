@extends('main.navbar') 

 
@section('content')

	<script>
// 	function changes options of subcategory dropdown selector based on category
	$(function() {

		$("#category").change(function() {
			$("#subcategory").load("/storage/textdata/" + $(this).val() + ".txt");
		});

		
	});

	</script>
	
<style>
    .panel-body{
        background: #444444;
    }
    
    .customSelect{
        color: black;
    }
   

</style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">New Product</div>
        </div>
        <div class="panel-body" >
            <form method="POST" action="/cms/product/save" class="form-horizontal" enctype="multipart/form-data" role="form">
                {!! csrf_field() !!}
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Name</label>
                        <div class="col-md-9">
                            <input id="name" name="name" type="text" placeholder="Product name" class="form-control input-md" required="">
 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textarea">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="textarea" name="description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="price">Price</label>
                        <div class="col-md-9">
                            <input id="price" name="price" type="text" placeholder="Product price" class="form-control input-md" required="">
 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Category</label>
                        <div class="col-md-9">
                            
 							<select class="customSelect" id="category" name="category">
                              <option value="Guns">Guns</option>
                              <option value="Melee">Melee</option>
                              <option value="Gear">Gear</option>
                              <option value="Clothing">Clothing</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" >Subcategory</label>
                        <div class="col-md-9">
                            
 							<select class="customSelect" id="subcategory" name="subcategory">
                               <option value="Pistols">Pistols</option>
                               <option value="Shotguns">Shotguns</option>
                               <option value="Assault Rifles">Assault Rifles</option>
                               <option value="Sniper Rifles">Sniper Rifles</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="file">File</label>
                        <div class="col-md-9">
                            <input id="file" name="file" class="input-file" type="file">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="submit"></label>
                        <div class="col-md-9">
                            <button id="submit" name="submit" class="btn btn-success">Create</button>
                        </div>
                    </div>
 
                </fieldset>
 
            </form>
        </div>
    </div>
@endsection