<div class="page-wrapper">
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row d-flex justify-content-center ">
                <div class="card radius-15">
                    <div class="">
                        <div class="card-header">
                            <h5 class="page-title mt-3 mb-3">Tạo mới sinh viên</h5>
                        </div>
                        <div class="card-body">
                            <form action="AdminController.php?action=create-student" method="post" id="form-create-user">
                                <div class="row mb-3">
                                    <input name="role_name" type="text" value="student" hidden>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">
                                            Mã sinh viên
                                            <span class="text-danger" style="margin-top: 5px;"> *</span>
                                        </label>
                                        <input name="code" type="text" value=""
                                            class="form-control"
                                            placeholder="Mã sinh viên">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Ngày bắt đầu học</label>
                                        <input name="dateStart" type="date" value=""
                                            class="form-control"
                                            placeholder="Ngày bắt đầu học">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">
                                            Tên sinh viên
                                            <span class="text-danger" style="margin-top: 5px;"> *</span>
                                        </label>
                                        <input name="name" type="text" value=""
                                            class="form-control"
                                            placeholder="Tên sinh viên">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">
                                            Mật khẩu
                                            <span class="text-danger" style="margin-top: 5px;"> *</span>
                                        </label>
                                        <input type="password" name="password"
                                            class="form-control"
                                            placeholder="Mật khẩu">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">
                                            Lớp
                                            <span class="text-danger" style="margin-top: 5px;"> *</span>
                                        </label>
                                        <input name="class" type="text" value=""
                                            class="form-control"
                                            placeholder="Lớp">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">Xác nhận mật khẩu</label>
                                        <input name="confirm_password" type="password"
                                            class="form-control"
                                            placeholder="Xác nhận mật khẩu">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">
                                            Email
                                            <span class="text-danger" style="margin-top: 5px;"> *</span>
                                        </label>
                                        <input name="email" type="text" value=""
                                            class="form-control"
                                            placeholder="Email">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">
                                            Chuyên ngành
                                            <span class="text-danger" style="margin-top: 5px;"> *</span>
                                        </label>
                                        <input name="specialized" type="text" value=""
                                            class="form-control"
                                            placeholder="Chuyên ngành">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Điện thoại</label>
                                        <input name="phone" type="text" value=""
                                            class="form-control"
                                            placeholder="Điện thoại">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label">
                                            Quyền
                                            <span class="text-danger" style="margin-top: 5px;"> *</span>
                                        </label>
                                        <select name="role"
                                            class="form-select form-control choices">
                                            <option value="" placeholder>Chọn quyền</option>
                                            <!-- @foreach ($roles as $key => $role)
                                                <option @if (old('role') == $key) selected @endif value="{{ $key }}">
                                                    {{ $role }}</option>
                                            @endforeach -->
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3"> 
                                    <div class="col-md-6">
                                        <label class="form-label">
                                            Trạng thái
                                            <span class="text-danger" style="margin-top: 5px;"> *</span>
                                        </label>
                                        <select name="active"
                                            class="form-select form-control choices">
                                        <option value="1">Hoạt động</option>
                                        <option value="0">Không hoạt động</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="card-footer">
                                    <div class="text-end">
                                        <button class="btn-store-user btn btn-primary py-2">
                                            <input type="submit" name="create_student" value="Tạo">
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
