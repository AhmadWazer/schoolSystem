<x-sidebar />

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Teacher </h4>
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Teacher Form</h5>
                    <small class="text-muted float-end">Fill with require details</small>
                </div>
                <div class="card-body">
                    <form class="" method="POST" name="form1"
                        action="{{ !empty($teacherdata)? route('teacher.update', ['id' => $teacherdata->id]) :route('teacher.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="tname"> Name</label>
                            <div class="input-group input-group-merge">
                                <input type="text" name="tname" class="form-control" id="basic-icon-default-fullname"
                                    placeholder="John Doe" aria-label="John Doe"
                                    aria-describedby="basic-icon-default-fullname2"
                                    value="{{ @$teacherdata->name }}" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="temail">Email</label>
                            <div class="input-group input-group-merge">
                                <input type="text" name="temail" id="basic-icon-default-company" class="form-control"
                                    placeholder="abc@gmail.com" aria-label="ACME Inc."
                                    aria-describedby="basic-icon-default-company2"
                                    value="{{ @$teacherdata->email }}" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-company">Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" name="tpassword" id="basic-icon-default-company"
                                    class="form-control" placeholder="12345678" aria-label="ACME Inc."
                                    aria-describedby="basic-icon-default-company2"
                                    value="{{ @$teacherdata->password }}" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-email">Phone</label>
                            <div class="input-group input-group-merge">
                                <input type="text" name="tphone" id="basic-icon-default-email" class="form-control"
                                    placeholder="00000000000" aria-label="john.doe"
                                    aria-describedby="basic-icon-default-email2"
                                    value="{{ @$teacherdata->phone }}" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-phone">Gender</label>
                            <div class="input-group input-group-merge">
                                <input type="text" name="tgender" id="basic-icon-default-phone"
                                    class="form-control phone-mask" placeholder="Male\Female" aria-label="658 799 8941"
                                    aria-describedby="basic-icon-default-phone2"
                                    value="{{ @$teacherdata->gender }}" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-phone">DOB</label>
                            <div class="input-group input-group-merge">
                                <input type="date" name="tdob" id="basic-icon-default-phone"
                                    class="form-control phone-mask" placeholder="01\12\2012" aria-label="658 799 8941"
                                    aria-describedby="basic-icon-default-phone2" value="{{ @$teacherdata->dob }}" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-phone">Current Address</label>
                            <div class="input-group input-group-merge">
                                <input type="text" name="tcurrentadd" id="basic-icon-default-phone"
                                    class="form-control phone-mask" placeholder="Current-Address"
                                    aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2"
                                    value="{{ @$teacherdata->current_address }}" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-phone">Permanent Address</label>
                            <div class="input-group input-group-merge">
                                <input type="text" name="tpaddress" id="basic-icon-default-phone"
                                    class="form-control phone-mask" placeholder="Permenent-Address"
                                    aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2"
                                    value="{{ @$teacherdata->permanent_address }}" />
                            </div>
                        </div>
                        <!-- checkbox for classes-->
                        <div class="mb-3">
                            <label class="form-label">Assign Class</label><br>
                            @foreach($clas as $class)
                                <div class="form-check form-check-inline mt-3">
                                    <input class="form-check-input" type="checkbox" name="assign_clas[]"
                                        id="inlineCheckbox{{ $class->id }}" value="{{ $class->id }}"
                                        {{ in_array($class->id, explode(',', $teacherdata->assign_class ?? '')) ? 'checked' : '' }} />
                                    <label class="form-check-label"
                                        for="inlineCheckbox{{ $class->id }}">{{ $class->c_name }}</label>
                                </div>
                            @endforeach
                        </div>
                        <!-- checkbox -->
                        
                        <!-- checkbox for subject-->
                        <div class="mb-3">
                            <label class="form-label">Assign subject</label><br>
                            @foreach($sub as $subject)
                                <div class="form-check form-check-inline mt-3">
                                    <input class="form-check-input" type="checkbox" name="assign_sub[]"
                                        id="inlineCheckbox{{ $subject->id }}" value="{{ $subject->id }}"
                                        {{ in_array($subject->id, explode(',', $teacherdata->assign_subject ?? '')) ? 'checked' : '' }} />
                                    <label class="form-check-label"
                                        for="inlineCheckbox{{ $subject->id }}">{{ $subject->s_name }}</label>
                                </div>
                            @endforeach
                        </div>
                        <!-- checkbox -->
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-phone">Picture</label>
                            <div class="input-group input-group-merge">
                                <input type="text" name="picture" id="basic-icon-default-phone"
                                    class="form-control phone-mask" placeholder="image" aria-label="658 799 8941"
                                    aria-describedby="basic-icon-default-phone2"
                                    value="{{ @$teacherdata->image }}" />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary send-btn">Save</button>
                        <a href="/student" type="button" class="btn btn-dark">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<x-footer />
