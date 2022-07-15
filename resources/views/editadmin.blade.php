@extends('layouts.main')
    
@section('main-sec')
<section class="home-section">
    <div class="home-content">
        <i class="bx bx-menu"></i>
        <span class="text">Admin</span>
    </div>
        <form action="/updatedata/{{ $data_admin->id }}" method="post" id="editForm">

            @csrf

            <div class="modal-body">

                    <div class="mb-3">
                        <span for="name" class="text">Nama Admin</span>
                        <input type="text" name="name" class="form-control input-nama-edit" id="name" value="{{ $data_admin->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Admin</label>
                        <input type="email" name="email"  class="form-control input-email-edit" id="email" value="{{ $data_admin->email }}">
                    </div>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary edit">Simpan</button>
            </div>
        </form>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1E5128" fill-opacity="1" d="M0,256L120,266.7C240,277,480,299,720,282.7C960,267,1200,213,1320,186.7L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
</section>
@endsection