@extends('principal')

@section('title', 'Informações Organizacionais da Empresa')

@section('conteudo')
       <table style="width: 100%;" cellspacing="3">
           <tbody>
               <tr>
                   <td>Número de empregados no ano base</td>
                   <td style="text-align: right;">{{$data->total_empregados}}</td>
               </tr>
               <tr>
                   <td>Turn-over anual do número de empregados</td>
                   <td style="text-align: right;">{{$data->turnover_ano}}</td>
               </tr>
               <tr>
                   <td>Pagamento médio médico para uma internação hospitalar</td>
                   <td style="text-align: right;">{{$data->pagamento_internacao}}</td>
               </tr>
               <tr>
                   <td>Pagamento médio médico para uma visita ao departamento de emergência</td>
                   <td style="text-align: right;">{{$data->pagamento_emergencia}}</td>
               </tr>
               <tr>
                   <td>Pagamento médio médico para uma visita ao consultório médico,incluido custos de laboratório</td>
                   <td style="text-align: right;">{{$data->pagamento_consulta}}</td>
               </tr>
               <tr>
                   <td>Pagamento médio por uma lesão no trabalho</td>
                   <td style="text-align: right;">{{$data->pagamento_lesao}}</td>
               </tr>
               <tr>
                   <td>Pagamento médio por um dia de trabalho ausente</td>
                   <td style="text-align: right;">{{$data->pagamento_ausencia}}</td>
               </tr>
               <tr>
                   <td>Pagamento médio por um dia de produtividade perdida</td>
                   <td style="text-align: right;">{{$data->pagamento_produtividade}}</td>
               </tr>
               <tr>
                   <td>Taxa de participação no programa de promoção de saúde</td>
                   <td style="text-align: right;">{{$data->taxa_participacao}}</td>
               </tr>
               <tr>
                   <td>Custo médio anual do programa por funcionário</td>
                   <td style="text-align: right;">{{$data->custo_medico_anual}}</td>
               </tr>
               <tr>
                   <td>Horizonte temporal para simulação(1 a 10 anos)</td>
                   <td style="text-align: right;">{{$data->horizonte_simulacao}}</td>
               </tr>
           </tbody>
       </table>
@stop