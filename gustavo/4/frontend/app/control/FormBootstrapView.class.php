<?php

class FormBootstrapView extends TPage
{
    private $form;
    
    /**
     * Class constructor
     * Creates the page
     */
    function __construct()
    {
        parent::__construct();
        
        // create the form using TQuickForm class
        $this->form = new BootstrapFormWrapper( new TQuickForm );
        $this->form->setFormTitle('cadastroTarefas');
        
        // create the form fields
        $id          = new TEntry('id');
        $id->setEditable(FALSE);
        $description = new TEntry('titulo');
        $list        = new TCombo('prioridade');
        $text        = new TText('descricao');
        
        $combo_items = array();
        $combo_items['1'] ='Baixa';
        $combo_items['2'] ='Media';
        $combo_items['3'] ='Alta';
        
        $list->addItems($combo_items);
        
        // add the fields inside the form
        $this->form->addQuickField('Id',    $id,    40);
        $this->form->addQuickField('Título', $description, 250);
        $this->form->addQuickField('Descrição', $text, 120);
        $this->form->addQuickField('Prioridade', $list, 120);

        $text->setSize(250, 50);
        
        // define the form action
        $btn = $this->form->addQuickAction('Save', new TAction(array($this, 'onSave')), 'fa:save');
        $btn->class = 'btn btn-success';
        
        $panel = new TPanelGroup('Cadastro de taredas');
        $panel->add($this->form);
        
        // wrap the page content using vertical box
        $vbox = new TVBox;
        $vbox->add($panel);

        parent::add($vbox);
    }
    
    /**
     * Simulates an save button
     * Show the form content
     */
    public function onSave($param)
    {
        $data = $this->form->getData(); // optional parameter: active record class
        
        // put the data back to the form
        $this->form->setData($data);
     
        try
        {
            // creates the soap client
            $client = new SoapClient(NULL, array('encoding'   =>'ISO-8859-1',
                                                 'exceptions' => TRUE,
                                                 'location'   => 'http://localhost/gustavo/4/service/GravarTarefas.php',
                                                 'uri'        => "http://test-uri/",
                                                 'trace'      => 1 ) );
        
            echo $client->setTarefas($data->titulo, $data->descricao, $data->prioridade);
            
            // show the message
            new TMessage('info', "Tarefa Salva");
        }
        catch (Exception $e)
        {
            new TMessage($e->getMessage());
        }
    }
}