<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscrição - Seminário da Caravana Baiana da Fraternidade</title>
    <link rel="shortcut icon" href="{{ asset('interface-ui_kit/favicon.ico') }}" type="image/x-icon">
    {{--<link rel="apple-touch-icon-precomposed" href="{{ asset('interface-ui_kitimages/apple-touch-icon.png') }}">--}}
    <link rel="stylesheet" href="{{ asset('interface-ui_kit/css/uikit.min.css') }}">
    <script src="{{ asset('interface-ui_kit/js/uikit.min.js') }}"></script>
    <style type="text/css">

        @keyframes animacaoMarca{
            from{
                background-position: 50% -160%;
                opacity: 0;
            }
            to{
                background-position: 50% 10%;
                opacity: 1;
            }

        }

        .my-gradient-style{
            background-image: radial-gradient(50% 100%, #3498DB 53%, #2980B9 100%);
        }
        .my-grid {
            background: url('{{ asset('interface-ui_kit/img/grid.png') }}') repeat center center;
        }
        .my-header{
            background: url('{{ asset('interface-ui_kit/img/Logo-Caravana_A.png') }}') 50% 10% no-repeat;
            padding-top:170px;
            animation: animacaoMarca 1s ease;
        }
        .my-header .uk-header-large{
            color: #FFF;
            opacity: 0.7;
        }
    </style>
</head>
<body>
<div class="my-gradient-style" data-uk-grid-margin>
    <div class="my-grid">
        <div class="uk-container uk-container-center">
            <div class="ui-grid">
                <div class="uk-width-medium-1-1">
                    <div class="uk-vertical-align uk-text-center my-header">
                        <div class="uk-vertical-align-middle">
                            <h1 class="uk-header-large">Seminário da Caravana Baiana da Fraternidade</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
    <div class="uk-grid" data-uk-grid>
        <div class="uk-width-large-7-10 uk-width-small-1-1 uk-width-medium-1-1 uk-container-center">
            {!! Form::open() !!}
            <div class="uk-form uk-form-stacked">
                <fieldset>
                    @if(Session::has('sucesso'))
                        <div class="uk-alert uk-alert-success">
                            {{ Session::get('sucesso') }}
                        </div>
                    @endif

                    @if(Session::has('erro'))
                        <div class="uk-alert uk-alert-danger">
                            {{ Session::get('erro') }}
                        </div>
                    @endif

                    <legend>Cadastro básico</legend>


                    <div class="uk-form-row">
                        <label class="uk-form-label" for="nome">Nome*</label>
                        <input type="text" name="nome" class="uk-width-1-1 uk-form-large" id="nome">
                        @if($errors->first('nome'))
                            <div class="uk-alert uk-alert-danger">{{ $errors->first('nome') }}</div>
                        @endif
                    </div>

                    <div class="uk-form-row">
                        <div class="uk-grid" data-uk-grid>
                            <div class="uk-width-large-1-2 uk-width-small-1-1 uk-width-medium-1-1">
                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="telefone">Telefone*</label>
                                    <input type="text" name="telefone" class="uk-width-1-1 uk-form-large" id="telefone">
                                    @if($errors->first('telefone'))
                                        <div class="uk-alert uk-alert-danger">{{ $errors->first('telefone') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="uk-width-large-1-2 uk-width-small-1-1 uk-width-medium-1-1">
                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="email">E-mail*</label>
                                    <input type="text" name="email" class="uk-width-1-1 uk-form-large" id="email">
                                    @if($errors->first('email'))
                                        <div class="uk-alert uk-alert-danger">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="uk-form-row">
                        <label class="uk-form-label" for="instituicao">Instituição*</label>
                        <input type="text" name="instituicao" class="uk-width-1-1 uk-form-large" id="instituicao">
                        @if($errors->first('instituicao'))
                            <div class="uk-alert uk-alert-danger">{{ $errors->first('instituicao') }}</div>
                        @endif
                    </div>

                    <div class="uk-form-row">
                        <label class="uk-form-label" for="area_atuacao">Área de atuação*</label>
                        <input type="text" name="areaAtuacao" class="uk-width-1-1 uk-form-large" id="area_atuacao">
                        @if($errors->first('areaAtuacao'))
                            <div class="uk-alert uk-alert-danger">{{ $errors->first('areaAtuacao') }}</div>
                        @endif
                    </div>
                    <div class="uk-form-row">
                        <button class="uk-button uk-button-primary uk-button-large" type="submit">Enviar cadastro</button>
                    </div>


                </fieldset>
            </div>
            {!! Form::close() !!}

        </div>
    </div>

    <div class="uk-grid-divider"></div>
    <h2 class="uk-header">Realização</h2>

    <div class="uk-grid">
        <div class="uk-width-1-1 uk-text-center">
            <img class="uk-thumbnail" src="{{ asset('interface-ui_kit/img/01.png') }}" alt="">
            <img class="uk-thumbnail" src="{{ asset('interface-ui_kit/img/03.png') }}" alt="">
            <img class="uk-thumbnail" src="{{ asset('interface-ui_kit/img/02.png') }}" alt="">
            {{--<img class="uk-thumbnail" src="{{ asset('interface-ui_kit/img/marca_04.png') }}" alt="">
            <img class="uk-thumbnail" src="{{ asset('interface-ui_kit/img/marca_05.png') }}" alt="">--}}
        </div>
    </div>

    <div class="uk-grid" data-uk-grid-margin>
        <div class="uk-width-medium-1-1">
            <div class="uk-panel uk-panel-box uk-text-center">
                <p>Design por: edyonil</p>
            </div>
        </div>
    </div>

</div>
</body>
</html>