<div class="content my-5">
    <div class="head d-flex justify-content-between align-items-center mb-5">
        <h4 class="m-0">Master Configuration</h4>
    </div>
    <div class="body">
        <div class="row">
            <div class="box table-responsive mb-4">
                <div class="title d-flex justify-content-between align-items-center">    
                    <h4 class="py-3">Industry List</h4>
                    <a class="btn btn-success" href="{{ url('/add-industry') }}"> <i class="fa-solid fa-plus"></i> </a>
                </div>
                <div class="table-responsive mb-3">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Industry</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($industry as $industry)
                            <tr  class="text-center">
                            <td scope="row">{{ $industry->id }}</td>
                            <td>{{ $industry->name }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ url('edit-industry/'.$industry->id) }}"> <i class="fa-solid fa-pen"></i> </a>
                                <a class="btn btn-danger" href=""> <i class="fa-solid fa-trash"></i> </a>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="box mb-4">
                <div class="title d-flex justify-content-between align-items-center">    
                    <h4 class="py-3">Location List</h4>
                    <a class="btn btn-success" href="{{ url('/add-location') }}"> <i class="fa-solid fa-plus"></i> </a>
                </div>
                <div class="table-responsive mb-3">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Location</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($location as $location)
                            <tr  class="text-center">
                            <td scope="row">{{ $location->id }}</td>
                            <td>{{ $location->name }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ url('edit-location/'.$location->id) }}"> <i class="fa-solid fa-pen"></i> </a>
                                <a class="btn btn-danger" href=""> <i class="fa-solid fa-trash"></i> </a>
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