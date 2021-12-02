@section('tital', __('Users'))
    {{-- <x-slot name="header">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Users</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Extra</li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </x-slot> --}}
<section class="content">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Users Table</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width: 10px">Id</th>
                            <th>Name</th>
                            <th>E-Mail</th>
                            <th style="width: 200px">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($data as $item )
                          <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td> {{ $item->email }}</td>
                                <td>Action</td>
                          </tr>
                          @endforeach --}}
                          @if ($data->count())
                          @foreach ($data as $item)
                              <tr>
                                  <td class="px-6 py-2">{{ $item->id }}</td>
                                  <td class="px-6 py-2">{{ $item->name }}</td>
                                  <td class="px-6 py-2">{{ $item->email }}</td>
                                  <td class="px-6 py-2 flex justify-end">
                                      <x-jet-button wire:click="updateShowModal({{ $item->id }})">
                                          {{ __('Update') }}
                                      </x-jet-button>
                                      <x-jet-danger-button class="ml-2" wire:click="deleteShowModal({{ $item->id }})">
                                          {{ __('Delete') }}
                                      </x-jet-button>
                                  </td>
                              </tr>
                          @endforeach
                      @else
                          <tr>
                              <td class="px-6 py-4 text-sm whitespace-no-wrap" colspan="4">No Results Found</td>
                          </tr>
                      @endif

                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        {{-- {{ $data->links() }} --}}
                        {{ $data->links('vendor.pagination.bootstrap-4') }}
                      {{-- <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                      </ul> --}}
                    </div>
                  </div>
            </div>
        </div>
</section>

