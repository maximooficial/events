
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css
"
/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


<link
    rel="stylesheet"
    href="/css/formulario.css"
/>

              

@extends('layouts.painel')

@section('content')

           
                        <div class="card">
                            <div >
                              
                                <div class="right-side">
                                    <div class="main active">
                                        <small><i class="fa fa-smile-o"></i></small>
                                        <div class="text">
                                            <h2>BORA CRIAR SEU EVENTO?</h2>
                                            <p>vamos começar com as informações do Basicas.</p>
                                        </div>
                                        <form class="form" action="{{route('enviareventos')}}" enctype="multipart/form-data" method="post">
                               @csrf
                                        <div class="input-text">
                                            <div class="input-div">
                                                <input type="text" required require id="evento_nome" name="evento_nome">
                                                <span>Nome </span>
                                            </div> 
                                            <select  type="text" name="eventos_id" id="eventos_id" required require >   
                                                        @foreach($grupos as $grupo)
                                                    <option value="" >Selecione o grupo do evento </option>
                                                   
                                                    <option value='{{$grupo->id}}' >{{$grupo->nome}} </option>
                                                    @endforeach 
                                                </select>            

                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Descrição</label>
                                            <textarea  type="text" class="form-control" id="descricao"  name="descricao" rows="8"></textarea>
                                            </div>
                                        <div class="input-text">
                                            <div class="input-div">
                                                <input type="text"  name="link" id="link" required require >
                                                <span>Link para Evento </span>
                                            </div>
                                    <input type="text" id="data_inicial" name="data_inicial" class="col-2 col-form-label"
                                     placeholder="Data Inicio" onfocus="(this.type='date')" onblur="(this.type='text')">
                                <input type="time" name="hora_inicio" id="hora_inicio">
                                    <input type="text" class="col-2 col-form-label" id="data_final" name="data_final" 
                                    placeholder="Data Final" onfocus="(this.type='date')"onblur="(this.type='text')">  
                                <input type="time" name="hora_final" id="hora_final">

                                </div>


   
                                        <div class="input-text"> 
                                            <div class="input-div">
                                                <select>
                                                    <option>Assunto</option>
                                                    <option>cinema e fotografia</option>
                                                    <option>games</option>
                                                    <option>Palestra</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="input-div">
                                                
                                                <select>
                                                    <option>Selecione Categoria</option>
                                                    <option>corrida</option>
                                                    <option>competição</option>
                                                    
                                                </select>
                                            </div>
                                            
                                        </div>     
<!--                                        <div class="buttons">
                                            <button class="next_button">Proxima Etapa</button>
                                        </div>
                                    </div>
                                    <div class="main">
-->
                                        <small><i class="fa fa-smile-o"></i></small>
                                        <div class="text">
                                            <h2>Endereço</h2>
                                            <p>Informe aonde sera Realizado seu Evento.</p>
                                        </div>
                                        <div class="input-text">
                                            <div class="input-div">
                                                <input type="text" id="local" name="local" required require>
                                                <span>Local</span>
                                            </div>
                                            <div class="input-div"> 
                                                <input type="text" id="cep" name="cep"  required required  value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);">
                                                <span>Cep</span>
                                            </div>
                                            <div class="input-div"> 
                                                <input name="rua" type="text" id="rua"   required require >
                                                <span>Rua</span>
                                            </div>
                                        </div>
                                        <div class="input-text">
                                            <div class="input-div">
                                                <input name="bairro" type="text" id="bairro"   required require>
                                                <span>Bairro </span>
                                            </div>
                                            <input  placeholder="Cidade" name="cidade" type="text" id="cidade" required require>
                                            <input  placeholder="Estado"  name="uf" type="text" id="uf"  required require> 
                                            <input  placeholder="Complemento" name="complemento" type="text" id="complemento"   require>
                                          </div>                                      
                                                               <!-- divisão de pagina -->      
                                       <!-- <div class="buttons button_space">
                                            <button class="back_button">Back</button>
                                            <button class="next_button">Next Step</button>
                                        </div>
                                    </div>  
                                    <div class="main"> --> 
                                        <small><i class="fa fa-smile-o"></i></small>
                                        <div class="text">
                                            <h2>Work Experiences</h2>
                                            <p>Can you talk about your past work experience?</p>
                                        </div>
                                        <div class="input-text">
                                            <div class="input-div">
                                                <input type="text" required require>
                                                <span>Experience 1</span>
                                            </div>
                                            <div class="input-div"> 
                                                <input type="text" required require>
                                                <span>Position</span>
                                            </div>
                                        </div>
                                        <div class="input-text">
                                            <div class="input-div">
                                                <input type="text" required>
                                                <span>Experience 2</span>
                                            </div>
                                            <div class="input-div">
                                                <input type="text" required>
                                                <span>Position</span>
                                            </div>
                                        </div>
                                        <div class="input-text">
                                            <div class="input-div">
                                                <input type="text" required>
                                                <span>Experience 3</span>
                                            </div>
                                            <div class="input-div">
                                                <input type="text" required>
                                                <span>Position</span>
                                            </div>
                                        </div>
                                        <!-- 
                                        <div class="buttons button_space">
                                            <button class="back_button">Back</button>
                                            <button class="next_button">Next Step</button>
                                        </div>
                                    </div>
                                    
                                    <div class="main"> -->
                                        <small><i class="fa fa-smile-o"></i></small>
                                        <div class="text">
                                            <h2>User Photo</h2>
                                            <p>Upload your profile picture and share yourself.</p>
                                        </div>
                                        <div class="user_card">
                                            <span></span>
                                            <div class="circle">
                                                <span><img src="https://i.imgur.com/hnwphgM.jpg"></span>
                                            </div>

                                           

                                            <div class="social">
                                                <span><i class="fa fa-share-alt"></i></span>
                                                <span><i class="fa fa-heart"></i></span>
                                                
                                            </div>
                                            <div class="user_name">
                                                <h3>Imagens do evento</h3>
                                                <div class="detail">
                                            <input type="file" name="imagem_1" id="imagem_1" class="from-control-file">
                                           
                                                    <p><a href="#">Izmar,Turkey</a>Hiring</p>
                                                    <p>17 last day . 94Apply</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons button_space">
                                            <button class="back_button">Back</button>
                                            <button class="submit_button">Submit</button>
                                        </div>
                                    </div>
                                    </form>
                                     <div class="main">
                                         <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                             <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                        </svg>
                                         
                                        <div class="text congrats">
                                            <h2>Congratulations!</h2>
                                            <p>Thanks Mr./Mrs. <span class="shown_name"></span> your information have been submitted successfully for the future reference we will contact you soon.</p>
                                        </div>
                                    </div>
                                    
                                
                                  
                    
                                
                    
                                </div>
                            </div>
                        </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="/js/formulario.js"></script>
   
    @endsection
