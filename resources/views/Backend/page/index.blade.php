@extends('backend.template.template')
@section('content')
 
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Sayfalar</h3>
       
        <div class="add-task-row">
            <a class="btn btn-success btn-sm pull-left" href="{{ route('page.create') }}">Yeni Sayfa Oluştur</a>
        </div>
        <div class="row mt">
            
            <div class="col-md-12 table-mt">
                
                <div class="content-panel">
                   
                    <table class="table table-striped table-advance table-hover">
                       
                        <thead>
                        <tr>
                            <th> No</th>
                            <th><i class="fa fa-bullhorn"></i> Başlık</th>
                            <th class="hidden-phone"><i class="fa fa-edit"></i>Özet İçerik</th>
                            <th><i class=" fa fa-edit"></i> Yayınlama Tarihi</th>
                            <th>Durum</th>

                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($pages as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td><a href="#">{{ Str::limit($item->title, 30) ?? '-' }}</a></td>
                                    <td class="hidden-phone">{{ Str::limit($item->summary, 10) ?? 'Özet içerik girilmedi.'}}</td>
                                    <td><span class="badge bg-theme"> {{ Carbon\Carbon::parse($item->date)->format('d-M-Y') }}</span></td>
                                   


                                    @if ($item->status == 1)
                                        <td><span class="badge bg-success">Aktif</span></td>
                                    @else
                                        <td><span class="badge bg-important">Pasif</span></td>
                                    @endif
                                    <td>
                                        <a href="#">
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                        </a>
                                        <a href="#">
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
  </section>
</section>
@endsection