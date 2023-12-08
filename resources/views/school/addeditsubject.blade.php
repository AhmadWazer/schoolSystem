<x-sidebar />
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Subject </h4>
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Subject Form</h5>
                    <small class="text-muted float-end">Fill with require details</small>
                </div>
                <div class="card-body">
                    <!--   -->
                    <form class="" method="POST" name="form1" action="{{ !empty($sdata)? route('subject.update', ['id' => $sdata->id]) :route('subject.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Subject Name</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    placeholder="urdu" aria-label="John Doe"
                                    aria-describedby="basic-icon-default-fullname2" name="s_name" value="{{@$sdata->s_name}}" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-company">Subject Code</label>
                            <div class="input-group input-group-merge">
                                <input type="number" id="basic-icon-default-company" class="form-control"
                                    placeholder="666" aria-label="ACME Inc."
                                    aria-describedby="basic-icon-default-company2" name="s_code" value="{{@$sdata->s_code}}" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-company">Subject Description</label>
                            <div class="input-group input-group-merge">
                                <textarea type="text" id="basic-icon-default-company" class="form-control"
                                    placeholder="ehrfhyjh" aria-label="ACME Inc."
                                    aria-describedby="basic-icon-default-company2" name="s_description" value="{{@$sdata->s_description}}">
                                    {{@$sdata->s_description}}</textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-phone">Assign Teacher</label>
                            <div class="input-group input-group-merge">
                                <select name="assign_teacher" id="abc" class="form-control phone-mask">
                                    <option value="{{@$sdata->assign_teacher}}">
                                    {{@$sdata->assign_teacher}}</option>
                                    
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="/subject" type="button" class="btn btn-dark">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<x-footer />
