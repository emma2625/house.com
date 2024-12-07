@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5 py-5">
            <div class="card mx-auto" style="max-width: 600px">
                <div class="card-body">
                    <h4 class="card-title">New Property</h4>
                    <div class="text-end mb-4">
                        <a href="{{ route('properties.index') }}" class="btn btn-primary btn-sm">
                            All Properties
                        </a>
                    </div>
                    <form action="{{ route('properties.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="name"> Property Name </label>
                            <input type="text" name="name" id="name" class="form-control" autofocus>
                            @error('name')
                                <span class="small text-danger fw-bold"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="price"> Property Price </label>
                            <input type="number" step="any" name="price" id="price" class="form-control">
                            @error('price')
                                <span class="small text-danger fw-bold"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="address"> Property Address </label>
                            <input type="text" name="address" id="address" class="form-control">
                            @error('address')
                                <span class="small text-danger fw-bold"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="state"> Property State </label>

                            <select name="state" id="state" class="form-select">
                                <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Akwa Ibom">Akwa Ibom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="Cross River">Cross River</option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Edo">Edo</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Enugu">Enugu</option>
                                <option value="FCT" selected>Federal Capital Territory</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value="Zamfara">Zamfara</option>
                            </select>
                            @error('state')
                                <span class="small text-danger fw-bold"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="category"> Property Category </label>
                            <select name="category" id="category" class="form-select">

                            </select>
                            @error('category')
                                <span class="small text-danger fw-bold"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="picture"> Property Image </label>
                            <input type="file" accept="image/*" name="picture" id="picture" class="form-control">
                            @error('picture')
                                <span class="small text-danger fw-bold"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="sale" />
                                <label class="form-check-label" for="sale"> For Sale</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="rent" />
                                <label class="form-check-label" for="rent"> For Rent</label>
                            </div>

                            

                        </div>
                        <div class="text-center my-3">
                            <button class="btn btn-primary px-5">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
{{-- 
    1. name,
    2. price,
    3. location,

    4. description,
    5. category
    7. is_for_sale,
    8. image
--}}
