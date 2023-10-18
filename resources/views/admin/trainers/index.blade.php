<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Trainers') }}
        </h2>
    </x-slot>
</x-app-layout>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Trainers List') }}</div>
                <div class="card-body">
                    <div class="mt-3 mb-3">
                        <a href="trainers/create" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Add New</a>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Photo</th>
                                <th scope="col">Name</th>
                                <th scope="col">Company</th>
                                <th scope="col">email</th>
                                <th scope="col">Location</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Qualification</th>
                                <th scope="col">Course</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @if ($trainers !== null)
                                @foreach($trainers as $item)
                            <tr>
                                <td></td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->company}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->location}}</td>
                                <td>{{$item->mobile}}</td>
                                <td>{{$item->qualifications}}</td>
                                <td>{{$item->courses}}</td>
                                <td></td>
                                
                            </tr>
                                @endforeach
                            @else
                            <tr>
                                No records.
                                
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
