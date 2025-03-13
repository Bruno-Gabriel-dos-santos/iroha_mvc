<?php

namespace App\Http\Controllers;

use App\Models\igration;
use Illuminate\Http\Request;

class IrohaController extends Controller
{



    public function Lista_de_nodos_atualizada(){

            // nodos == sites da rede ....

    }

    public function Geração_de_blocos_inicial(){



    }

    public function Sincronização_de_blocos_com_a_rede(){


    }

    public function Divisão_de_rede(){


    }

    public function Verificação_de_rede(){


    }

    public function Recebe_Banco_criptografico_Usuario(){}

    public function Recebe_moeda_iroha(){

    }

    public function Envia_moeda_iroha(){

    }

    public function Compartilha_Transação(){}


    public function Processa_moeda_iroha_e_conta_ciclo(){

    }

    public function Adição_de_transação_a_lista_de_transaçoes(){}

    public function Armazena_contratos(){}


  //=========================================================================================================================

   
    public function Cadastramento_de_BANCO(){

    }

    public function Configurações_Do_BANCO(){

    }

    public function Lista_dos_Bancos(){}

    public function Bloqueio_de_margem(){

    }

    public function Validação_banco_contrato_margem(){


        // valida o banco e sua legalidade baseado na margem e no processamento de seus contratos efetuados 
        // verifica se o banco esta cumprindo suas obrigações
    }

    public function Contratos_BANCO(){
        // contratos == transações internas do banco , compra de processamentos da rede , regras internas do banco e seu aceite pelos usuarios
    }

//===========================================================================================================================

    public function Lista_nodos_worker(){


    }

    public function Contratos_worker(){}












    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(igration $igration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(igration $igration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, igration $igration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(igration $igration)
    {
        //
    }
}
