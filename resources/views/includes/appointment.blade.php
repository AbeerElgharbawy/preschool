<div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Make Appointment</h1>
                                <form action="{{route('storeAppointment')}}" method="post">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="guardianName" placeholder="Gurdian Name" name="guardianName">
                                                @error('guardianName')
                                                    {{ $message }}
                                                @enderror
                                                <label for="guardianName">Gurdian Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" id="gmail" name="guardianEmail" placeholder="Gurdian Email">
                                                @error('guardianEmail')
                                                    {{ $message }}
                                                @enderror
                                                <label for="guardianEmail">Gurdian Email</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="cname" name="childName" placeholder="Child Name">
                                                @error('childName')
                                                    {{ $message }}
                                                @enderror
                                                <label for="childName">Child Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="cage" name="childAge" placeholder="Child Age">
                                                @error('childAge')
                                                    {{ $message }}
                                                @enderror
                                                <label for="childAge">Child Age</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px" name="message"></textarea>
                                                @error('message')
                                                    {{ $message }}
                                                @enderror
                                                <label for="message">Message</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit" >Submit</button>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="{{asset('assets/img/appointment.jpg')}}" style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>