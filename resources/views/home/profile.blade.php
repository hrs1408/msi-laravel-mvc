<x-app-layout>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px"
                         src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    <span>
                        <button class="btn btn-dark mb-3">
                            Upload
                        </button>
                    </span>
                    <span class="font-weight-bold">{{$user->name}} - {{$user->role}}</span>
                    <span class="text-black-50">{{$user->email}}</span>
                    <span> </span>
                </div>
            </div>
            <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile</h4>
                    </div>
                    <form action="" class="form">
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Name</label><input type="text"
                                                                                            class="form-control"
                                                                                            placeholder="first name"
                                                                                            value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Email</label><input type="text"
                                                                                             class="form-control"
                                                                                             placeholder="enter email"
                                                                                             value="{{$user->email}}"
                                disabled>
                            </div>
                            <div class="col-md-12"><label class="labels">Phone</label><input type="text"
                                                                                             class="form-control"
                                                                                             placeholder="enter phone number"
                                                                                             value="{{$user->phone}}">
                            </div>
                            <div class="col-md-12"><label class="labels">Address</label><input type="text"
                                                                                               class="form-control"
                                                                                               placeholder="enter address"
                                                                                               value="{{$user->address}}">
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-dark profile-button" type="submit">Save Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
