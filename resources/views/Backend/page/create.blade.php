@extends('backend.template.template')
@section('content')
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Yeni Sayfa</h3>
        @if (session()->has('success'))
        <div class="my-3">
            <div class="alert alert-success">{!! session()->get('success') !!}</div>
        </div>
        @endif
        @if (session()->has('error'))
            <div class="my-3">
                <div class="alert alert-danger">{!! session()->get('error') !!}</div>
            </div>
        @endif
        @if ($errors->any())
            <div class="my-3">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Sayfa Bilgileri</h4>
                    <form class="form-horizontal style-form" action="{{ route('page.store') }}" method="POST">
                        @csrf
                        <label class="checkbox-inline bottom">
                            <input type="checkbox" name="status" id="inlineCheckbox1" value="1"> Sayfa durumunu aktifleştir
                        </label>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Yayınlama Tarihi :</label>
                            <div class="col-sm-4">
                                <input type="date" name="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Başlık :</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Özet içerik :</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="summary"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">İçerik :</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="content" id="ckeditor"></textarea>
                            </div>
                        </div>

                              <button type="submit" class="btn btn-primary">Kaydet</button>
                              <a href="{{ route('page.index') }}">
                                <button type="submit" class="btn btn-danger">İptal</button>
                              </a>
                    </form>
                </div>
            </div>      	
        </div>
  </section>
</section>

@endsection

@section('js')
<script>
     CKEDITOR.replace( 'ckeditor' );
</script>


@endsection