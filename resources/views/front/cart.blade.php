@extends('layout.template')

@section('title', 'Shopping Cart')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th style="width:50%">Product</th>
                        <th style="width:10%">Price</th>
                        <th style="width:8%">Quantity</th>
                        <th style="width:22%" class="text-center">Subtotal</th>
                        <th style="width:10%"></th>
                    </tr>
                </thead>
                @foreach ($products as $product)
                <tbody>
                    <tr>
                        <td data-th="Product">
                            
                            <div class="row">
                                <div class="col-sm-6 col-md-3 hidden-xs"><img src="{{unserialize($product->images)[0]}}" width="120" height="120" alt="..."
                                        class="img-responsive" /></div>
                                <div class="col-sm-6 col-md-9">
                                    <h4 class="nomargin">{{$product->title}}</h4>
                                    <p>{{substr($product->description,0,105)}}</p>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">{{$product->price}}</td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control text-center" value="1">
                        </td>
                        <td data-th="Subtotal" class="text-center subtotal">{{$product->price}}</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-info btn-sm"><i class="fa fa-sync-alt"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>          
                @endforeach
        
                <tfoot>
                    {{-- <tr class="visible-xs">
                        <td class="text-center total"><strong>Total 1.99</strong></td>
                    </tr> --}}
                    <tr>
                        <td><a href="{{route('front.index')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-center total"><strong>Total $1.99</strong></td>
                        <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div>
<!-- End Items -->

@endsection
