<?php use App\Models\Telefone;
?>
<html>
    <head>
      <meta charset="utf-8">
    </head>
    <body>
        <div style="display: block">
            <h1>Cadastro de Pessoa</h1>
        </div>
        <div>
            <form action= "events" method= "POST" style="display: flex;flex-direction: row"> <!-- informações são enviadas pro script (dados.php) de forma invisivel, todos esses dados serão incorporados e passados pro dados.php -->
                @csrf
                <div>
                    Nome: <input type = "text" name= "nome" placeholder="Nome Completo"> <br>
                    CPF: <input type = "text" name= "cpf" placeholder= "CPF com pontuacao"> <br>
                    
                </div>
                <div>
    
                    <table border="1px">
                        <thead>
                            <tr>
                                <th>
                                    Telefone
                                </th>
                                <th>
                                    Descrição do Telefone
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Telefone 1: <input type = "text" name= "t1" placeholder= "Insira DDD e numeros"> <br>
                                </td>
                                <td>
                                   <input type = "text" name= "d1" placeholder= "Ex: Cel. Claro, Cel. TIM"> <br>
                               </td>
                           </tr>
                           <tr>
                            <td>
                                Telefone 2: <input type = "text" name= "t2" placeholder= "Insira DDD e numeros"> <br>
                            </td>
                            <td>
                               <input type = "text" name= "d2" placeholder= "Ex: Cel. Claro, Cel. TIM"> <br>
                           </td>
                       </tr>
                       <tr>
                        <td>
                            Telefone 3: <input type = "text" name= "t3" placeholder= "Insira DDD e numeros"> <br>
                        </td>
                        <td>
                           <input type = "text" name= "d3" placeholder= "Ex: Cel. Claro, Cel. TIM"> <br>
                       </td>
                   </tr>
                   <tr>
                    <td>
                        Telefone 4: <input type = "text" name= "t4" placeholder= "Insira DDD e numeros" > <br>
                    </td>
                    <td>
                       <input type = "text" name= "d4" placeholder= "Ex: Cel. Claro, Cel. TIM"> <br>
                   </td>
               </tr>
               <tr>
                <td>
                    Telefone 5: <input type = "text" name= "t5" placeholder= "Insira DDD e numeros"> <br>
                </td>
                <td>
                    <input type = "text" name= "d5" placeholder= "Ex: Cel. Claro, Cel. TIM"> <br>
                </td>
            </tr>
        </tbody>
    </table> 
    
    <br>
    <br>
    <button type="submit" name = "gravou">Gravar </button>
    
    </div>
    
    </form>
    </div>
    <hr>
    @if(session('msg'))
                    <h3>{{session('msg')}}</h3>
    @endif
     @if(!$usuario->isEmpty())  <!-- so printa a tabela se tiver alguem guardado em usuario -->
    <table border>
    
      <thead>
        <h2> Dados Gravados </h2>
          <tr> 
              <th> Nome </th>
              <th> CPF </th>
           <th> Telefone - Descrição </th> 
          </tr>
          
           @for($i=0;$i<count($usuario);$i++)
           @php $telefone=Telefone::where('id_usuario','=',$usuario[$i]->id)->get(); @endphp
            <tr>
                <td>{{$usuario[$i]->nome}} </td>
                <td>{{$usuario[$i]->cpf}} </td>
                <td>
             @foreach($telefone as $cels)  {{$cels->telefone}} - {{$cels->descricao}} <br>
             @endforeach
            </td>
            </tr>
            
            @endfor
        
          </thead>
        </table>
        @endif
    </body>
    </html>