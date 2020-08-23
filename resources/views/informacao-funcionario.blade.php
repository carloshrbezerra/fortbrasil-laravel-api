@extends('principal')

@section('title', 'Informações dos Funcionários')

@section('conteudo')
<h4>Características dos Funcionários</h4>
<table style="width: 100%;" cellspacing="3">
    <tbody>
        <tr>
            <td>Idade</td>
            <td>
                <table style="width: 100%;">
                    <tbody>
                        @foreach ($data["demografico"]->dadosIdades as $riscoPdf)
                        <tr>
                            <td>{{$riscoPdf->nome}}</td>
                            <td style="text-align: right;">{{number_format($riscoPdf->valor,2,',','.')}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>Genero</td>
            <td>
                <table style="width: 100%;">
                    <tbody>
                        @foreach ($data["demografico"]->dadosGenero as $riscoPdf)
                        <tr>
                            <td>{{$riscoPdf->nome}}</td>
                            <td style="text-align: right;">{{number_format($riscoPdf->valor,2,',','.')}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>Setor</td>
            <td>
                <table style="width: 100%;">
                    <tbody>
                        @foreach ($data["demografico"]->dadosSetor as $riscoPdf)
                        <tr>
                            <td>{{$riscoPdf->nome}}</td>
                            <td style="text-align: right;">{{number_format($riscoPdf->valor,2,',','.')}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>Salário</td>
            <td>
                <table style="width: 100%;">
                    <tbody>
                        @foreach ($data["demografico"]->dadosSalario as $riscoPdf)
                        <tr>
                            <td>{{$riscoPdf->nome}}</td>
                            <td style="text-align: right;">{{number_format($riscoPdf->valor,2,',','.')}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>Educação</td>
            <td>
                <table style="width: 100%;">
                    <tbody>
                        @foreach ($data["demografico"]->dadosEducacao as $riscoPdf)
                        <tr>
                            <td>{{$riscoPdf->nome}}</td>
                            <td style="text-align: right;">{{number_format($riscoPdf->valor,2,',','.')}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<h4>Risco Basal e Mudança Anual</h4>
<table style="width: 100%;" cellspacing="3">
    <tbody>
        <tr>
            <td>Biometricos</td>
            <td>
                <table style="width: 100%;">
                    <tbody>
                        @foreach ($data["biometrico"] as $riscoPdf)
                        <tr>
                            <td>{{$riscoPdf->nome}}</td>
                            <td style="text-align: right;">{{number_format($riscoPdf->valor,2,',','.')}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>Comportamental</td>
            <td>
                <table style="width: 100%;">
                    <tbody>
                        @foreach ($data["comportamental"] as $riscoPdf)
                        <tr>
                            <td>{{$riscoPdf->nome}}</td>
                            <td style="text-align: right;">{{number_format($riscoPdf->valor,2,',','.')}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>Psicossocial</td>
            <td>
                <table style="width: 100%;">
                    <tbody>
                        @foreach ($data["psicossocial"] as $riscoPdf)
                        <tr>
                            <td>{{$riscoPdf->nome}}</td>
                            <td style="text-align: right;">{{number_format($riscoPdf->valor,2,',','.')}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
@stop