@extends('layout.template')

@section('title', 'All Category Page')

@section('content')

<div class="container">
    <div id="ui">
        <div class="card col-md-6 offset-md-3 my-5 shadow-lg text-danger">
            <div class="card-header">
                <h4><i class="fas fa-info-circle"><span class="ml-2">Warning!!!</span></i></h4>
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">Are You Sure?</h5>
            </div>
            <div class="card-footer">
                <div class="fa-pull-right">
                    <input type="button" class="btn btn-light btn-cancle mr-1" value="cancle" >
                    <input type="submit" class="btn btn-primary btn-confirm" value="confirm" id="">
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card" id="create">
                <div class="card-header">
                    <h4>Category Create Form</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('category.store')}}">
                        @csrf
                        @if (session('status'))
                        <div class="col-md-12 alert alert-success text-center">
                            {{session('status')}}
                        </div>
                        @endif
                        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                name="name" value="{{ old('name') }}" placeholder="Category Name">
                            @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <input type="submit" class="btn btn-primary fa-pull-right" value="Create Category">
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
            <div class="card" id="edit">
                <input type="hidden" name="eid" id="eid" value="">

                <div class="card-header">
                    <h4>Category Create Form</h4>
                </div>
                <div class="card-body">
                    <form method="POST">
                        @csrf
                        @if (session('status'))
                        <div class="col-md-12 alert alert-success text-center">
                            {{session('status')}}
                        </div>
                        @endif
                        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="name" id="edit-input"
                                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value=""
                                placeholder="Category Name">

                            <input type="hidden" name="eid" id="eid" value="">
                            @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <input type="button" class="btn btn-primary fa-pull-right btn-update" id="btn-refresh"
                            value="Update Category">
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card tb" id="table-card">
                <div class="card-header">
                    <h4>Category Table</h4>
                </div>
                <div class="card-body" id="table">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    {{-- <a href="#"><i class="fas fa-user-edit mr-5" id="btn-edit" data-id="{{$category->id}}"></i></a>
                                    --}}
                                    <input type="button" class="btn btn-info btn-sm btn-edit mr-3"
                                        data-id="{{$category->id}}" name="" value="edit">
                                    <input type="button" class="btn btn-danger btn-sm btn-delete"
                                        data-id="{{$category->id}}" name="" value="delete">

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script type="text/javascript">
    $('document').ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        var html = "";
        var j = 0;
        $('#create').show();
        $('#edit').hide();
        $('#ui').hide();
        $('.btn-edit').click(function () {
            $('#create').hide();
            $('#edit').show();
            var id = $(this).data('id');
            // alert(id);
            html = "";
            $.post("{{route('category.edit')}}", {id: id}, function (response) {
                console.log(response);
                var eid = response.id;
                var name = response.name;
                // console.log(eid);
                html += name;
                $('#edit-input').val(html);
                $('#eid').val(eid);
            });

        })
        $('.btn-update').click(function () {
            var id = $('#eid').val();
            var name = $('#edit-input').val();
            console.log(name);
            $.post("{{route('category.update')}}", {
                id: id,
                name: name
            }, function (response) {
                console.log(response);

            })
            // $("#table").load("#table");

        })


        $("tbody").on("click", ".btn-delete", function(){
            var id = $(this).data('id');
            var result = confirm('Are you sure?');
            if(result){
                console.log(id);
                $.post("{{route('category.destroy')}}", {id:id }, function(data){
                    console.log(data);
                    $("#table-card").load("category #table-card");
                })
            }
        })
        
        function RefreshTable() {
            $("#table-card").load("category #table-card");
        }

        $("#btn-refresh").on("click", RefreshTable);

        // function showTabel() {
        //     $.get("{{route('category.index')}}", function(response) {
        //         console.log(response);
        //         // alert(response);
        //         // var category_list = JSON.parse(response);
        //         // console.log(category_list);
        //     })
        // }


        // var ui = "";
        // function cusconfirm(message) {
        //     alert("Enter"); 
        //     ui += `<div class="card col-md-6 offset-md-3 my-5 shadow-lg text-danger">
        //                 <div class="card-header">
        //                     <h4><i class="fas fa-info-circle"><span class="ml-2">Warning!!!</span></i></h4>
        //                 </div>
        //                 <div class="card-body">
        //                     <h5 class="card-title text-center">${message}</h5>
        //                 </div>
        //                 <div class="card-footer">
        //                     <div class="fa-pull-right">
        //                         <input type="button" class="btn btn-light btn-cancle mr-1" value="cancle" >
        //                         <input type="submit" class="btn btn-primary btn-confirm" value="confirm" id="">
        //                     </div>
        //                 </div>
        //             </div>`

        //     $('#ui').html(ui);        
        //     // return;
        // }


                // $('.btn-delete').click(function () {
            
        //     // cusconfirm("Are You Sure?");
        //     // alert("Hi");
        //     $('#ui').show();
        //     $('#create').hide();
        //     $('#edit').hide();
        //     $('#table-card').hide();
        //     $('.btn-confirm').click(function() {
        //         // alert("confirm!!!");
        //         console.log("confirm!!!");
        //         $('#create').show();
        //         // $('#edit').show();
        //         $('#table-card').show();
        //         $('#ui').hide();
        //     })
        //     $('.btn-cancle').click(function() {
        //         // alert('cancle!!!');
        //         console.log("cancle!!!");
        //         $('#create').show();
        //         // $('#edit').show();
        //         $('#table-card').show();
        //         $('#ui').hide();
        //     })
            
        // })
        

    })

</script>

@endsection
