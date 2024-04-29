<x-auth.layout>
    <x-slot name="title">Beranda</x-slot>
    <div class="card" style="background-color: white">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card-body">
                    <h4 class="card-title display-6 mb-4 text-truncate lh-sm text-black">Halo {{ Auth()->user()->name }}!🎉</h4>
                    <p class="mb-0 text-black">Selamat menjalankan tugas dan semoga harimu menyenangkan.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 position-relative text-center">
                <img src="https://demos.themeselection.com/materio-bootstrap-html-admin-template/assets/img/illustrations/illustration-john-2.png"
                    class="card-img-position bottom-0 w-50 end-0 scaleX-n1-rtl" alt="View Profile">
            </div>
        </div>
    </div>

</x-auth.layout>
