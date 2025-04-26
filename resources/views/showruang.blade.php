@extends('layouts.main')
@section('content')
<div style="background-color: #f6f1de;" class="d-flex justify-content-center align-items-center vh-100">
    <div class="d-flex text-center rounded" style="width: 95%; height: 95%;">
      
        <div class="position-relative col-md-6 d-none d-md-block">
            <img src="/assets/images/login-estetik.png" class="w-100 h-100" style="object-fit: cover;" alt="Gambar Background">
            <div class="position-absolute top-50 translate-middle-y ps-3 text-start" style="left: 7%;">
                <h1 style="color: #f6f1de; font-family: 'Cal Sans', sans-serif; font-size: 60px;">Form Peminjaman</h1>
            </div>
            <div class="position-absolute" style="left: 4%; top: 4%">
                <img src="{{ asset('assets/images/LOGO_ORIGINAL.png') }}" alt="" style="width: 60px; height: 60px;">
            </div>
        </div>
  
        <div class="col-md-6 d-flex align-items-center justify-content-center" style="background-color: #3e3f5b;">
            <form action="/daftarpinjam" method="post" style="width: 80%;">
                @csrf
                <div class="mb-3 text-start">
                    <label for="room_id" class="form-label" style="color: #f6f1de;">Kode Ruangan</label>
                    <select class="form-select" name="room_id" id="room_id" style="border-radius: 25px; height: 45px;" required>
                        <option selected disabled>Pilih Kode Ruangan</option>
                        @foreach ($rooms as $room)
                            @if ($room->code == request()->segment(count(request()->segments())))
                                <option value="{{ $room->id }}" selected>{{ $room->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="mb-3 text-start">
                    <label for="purpose" class="form-label" style="color: #f6f1de;">Tujuan</label>
                    <input type="text" class="form-control" id="purpose" name="purpose" placeholder="Masukan tujuan peminjaman" style="border-radius: 25px; height: 45px;" required>
                </div>

                <div class="row">
                    <div class="col mb-3 text-start">
                        <label for="time_start_use" class="form-label" style="color: #f6f1de;">Mulai Pinjam</label>
                        <input type="datetime-local" class="form-control" id="time_start_use" name="time_start_use" style="border-radius: 25px; height: 45px;" required>
                    </div>
                    <div class="col mb-3 text-start">
                        <label for="time_end_use" class="form-label" style="color: #f6f1de;">Selesai Pinjam</label>
                        <input type="datetime-local" class="form-control" id="time_end_use" name="time_end_use" style="border-radius: 25px; height: 45px;" required>
                    </div>
                </div>

                <button type="submit" class="btn w-100" style="background-color: #8ab2a6; border-radius: 25px; height: 50px; font-family: 'Cal Sans', sans-serif; color: #f6f1de; letter-spacing: 3px;">
                    KIRIM
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
