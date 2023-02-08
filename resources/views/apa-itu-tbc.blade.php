@extends('user.layout.layout')
@section('content')




<div class="md:flex font-poppins font-Poppins">

    <div class="  p-4 rounded-2xl lg:w-[900px] lg:mx-auto mx-5 mt-5 ">

        <div class="mb-4 border-b border-gray-200  text-lg">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 text-lg dark:border-blue-500"
                        id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                        aria-selected="true">{{ get_meta_value('judul') }}</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-lg text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">{{ get_meta_value1('judul') }}</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-lg text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                        id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings"
                        aria-selected="false">Gejala</button>
                </li>
                <li role="presentation">
                    <button
                        class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-lg text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                        id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts"
                        aria-selected="false">Pengobatan</button>
                </li>
            </ul>
        </div>
        <div id="myTabContent">
            <div class="p-4  rounded-lg dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <p class="text-base  text-gray-500 dark:text-gray-400">{!! get_meta_value('isi') !!}</p>

                <iframe id="embedded-human" frameBorder="0" style="aspect-ratio: 1 / 1; width: 100%"
                    allowFullScreen="true" loading="lazy"
                    src="https://human.biodigital.com/viewer/?id=4y7R&ui-anatomy-descriptions=false&ui-anatomy-labels=true&ui-audio=true&ui-chapter-list=false&ui-fullscreen=true&ui-help=true&ui-info=true&ui-label-list=true&ui-layers=true&ui-loader=circle&ui-media-controls=full&ui-menu=true&ui-nav=true&ui-search=true&ui-tools=true&ui-tutorial=true&ui-undo=true&ui-whiteboard=true&initial.none=true&disable-scroll=false&uaid=KMjkW&paid=o_3b04a6f0"></iframe>


            </div>
            <div class="hidden p-4  rounded-lg " id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <h1 class=" text-xl">Penyebab TBC </h1>
                <img src="img/3.jpg" class="float-left" width="400px" alt="">
                <p class="text-base  text-gray-500 ">{!! get_meta_value('isi') !!} </p>



            </div>
            <div class="hidden p-4  rounded-lg " id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <h1 class=" text-xl">Gejala TBC (Tuberkulosis) </h1>
                <img src="img/gejala.jpg" class="mx-auto mt-10" width="400px" alt="">
                <p class="text-base pt-5 text-gray-500 mt-5">Pada TBC laten, penderita umumnya tidak mengalami gejala.
                    Umumnya, penderita baru menyadari dirinya menderita tuberkulosis setelah menjalani pemeriksaan untuk
                    penyakit lain.
                    <br> <br>
                    Sementara bagi penderita TBC aktif, gejala yang muncul dapat berupa:
                </p>
                <ul class="list-disc px-10 text-base  text-gray-500 mt-3">
                    <li>Batuk yang berlangsung lama (3 minggu atau lebih)</li>
                    <li>Batuk biasanya disertai dengan dahak atau batuk darah</li>
                    <li>Nyeri dada saat bernapas atau batuk</li>
                    <li>Berkeringat di malam hari</li>
                    <li>Hilang nafsu makan</li>
                    <li>Penurunan berat badan</li>
                    <li>Demam dan menggigil</li>
                    <li>Kelelahan</li>
                </ul>


            </div>
            <div class="hidden p-4  rounded-lg " id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                <h1 class=" text-xl">Pengobatan TBC (Tuberkulosis) </h1>
                <img src="img/obat.jpg" class="float-left" width="400px" alt="">
                <p class="text-base pt-5 text-gray-500 mt-5">Pengobatan tuberkulosis (TBC) adalah dengan patuh minum
                    obat selama jangka waktu yang dianjurkan oleh dokter. Jika pasien berhenti minum obat sebelum waktu
                    yang disarankan, bakteri TBC berpotensi kebal terhadap obat yang biasa diberikan. Akibatnya, TBC
                    menjadi lebih berbahaya dan akan lebih sulit diobati.
                    <br> <br>
                    Obat yang diminum merupakan kombinasi dari dua atau empat obat berikut:
                </p>
                <ul class="list-disc px-10 text-base  text-gray-500 mt-3">
                    <li>Isoniazid</li>
                    <li>Rifampicin</li>
                    <li>Pyrazinamide</li>
                    <li>Ethambutol</li>
                </ul>
                <br> <br> <br>
                <p class="text-base  text-gray-500 mt-3">Obat tersebut harus diminum secara rutin selama 6–9 bulan.
                    Sama seperti obat-obat lain, obat TBC juga memiliki efek samping, antara lain:
                </p>
                <ul class="list-disc px-10 text-base  text-gray-500 mt-3">
                    <li>Warna urine menjadi kemerahan</li>
                    <li>Penurunan efektivitas pil KB, KB suntik, atau susuk</li>
                    <li>Gangguan penglihatan</li>
                    <li>Gangguan saraf</li>
                    <li>Gangguan fungsi hati</li>
                </ul>


            </div>

        </div>










    </div>









</div>
@endsection