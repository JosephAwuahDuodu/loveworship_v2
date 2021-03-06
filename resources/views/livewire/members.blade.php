<div>
    <div class="row">
        <div class="col-lg-12">

            {{-- add member form area --}}
            @if ($form == 1)
            @livewire('addmember')
            @else
            @endif

            <div class="">
                <div class="card card-box mb-5">
                    <div class="card-header">
                        <h3 class="my-3">Members</h3>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">All Members</a>
                            </li>
                        </ul>

                        <div class="tab-content p-3 pb-0">
                            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card card-box mb-5 table-responsive">
                                    <div class="card-header">
                                        <div class="card-header--actions">
                                            <button wire:click="toggle_form" class="btn btn-sm btn-primary">
                                                <i class="fas fa-plus"></i> Add New Member
                                            </button>
                                        </div>
                                    </div>
                                    <table id="example" class="table table-hover w-100" data-toggle="datatable">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Branch</th>
                                                <th>Area of Residence</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($members ?? "")
                                            @foreach ($members as $user)
                                            <tr>
                                                <td></td>
                                                <td>{{ $user->fname }} {{ $user->lname }}</td>
                                                <td>{{ $user->phone }}</td>
                                                <td>{{ $user->branch->branch_name ?? ""}}</td>
                                                <td>{{ $user->area_of_residence }}</td>
                                                <td>
                                                    <a href="{{ route('view_member', $user->id) }}"
                                                        class="btn btn-first pl-2 pr-2 btn-sm ml-1 mr-1" title="View">
                                                        <i class="fas fa-binoculars"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ADD NEW MEMBER MODAL  --}}
    <div id="add_new_member" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom" style="border-radius: 15px;">
            <div class="w3-container">
                <span onclick="document.getElementById('add_new_member').style.display='none'"
                    class="w3-closebtn">&times;</span>
                <div class="card shadow-md m-3">
                    <div class="card-header">
                        <h3>Add New Member</h3>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='addMember'>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{-- {{ $fname }} --}}
                                        <label for="fname">First Name: </label>
                                        <input wire:model="fname" type="text" placeholder="Enter First Name"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        {{-- {{ $lname }} --}}
                                        <label for="lname">Last Name: </label>
                                        <input wire:model="lname" type="text" placeholder="Enter Last Name"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="dob">Date of Birth: </label>
                                        <input wire:model="dob" type="date" placeholder="Enter Date of Birth"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="branch">Branch: </label>
                                        <select wire:model="branch" class="form-control">
                                            <option value="">Select Branch</option>
                                            <option value="1">Madina</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone Number: </label>
                                        <input wire:model="phone" type="text" placeholder="Enter Phone Number"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="area_of_residence">Area of Residence: </label>
                                        <input wire-model="area_of_residence" type="text"
                                            placeholder="Enter Area of Residence" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Save Member"
                                            class="btn btn-block btn-primary main_color_btn">
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
