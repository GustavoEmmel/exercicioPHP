<?php

class DatagridBootstrapView extends TPage
{
    private $datagrid;
    
    public function __construct()
    {
        parent::__construct();
        
        // creates one datagrid
        $this->datagrid = new BootstrapDatagridWrapper(new TQuickGrid);
        $this->datagrid->setHeight(320);
        
        // add the columns
        $this->datagrid->addQuickColumn('Code',    'id',    'right', 70);
        $this->datagrid->addQuickColumn('Título',    'titulo',    'left', 180);
        $this->datagrid->addQuickColumn('Descrição', 'descricao', 'left', 280);
        $this->datagrid->addQuickColumn('Prioridade',   'prioridade',    'left', 70);
       
        // creates the datagrid model
        $this->datagrid->createModel();
        
        $panel = new TPanelGroup('Listagem de tarefas');
        $panel->style="max-width: 700px";
        $panel->add($this->datagrid);
        
        // wrap the page content using vertical box
        $vbox = new TVBox;
        $vbox->add($panel);

        parent::add($vbox);
    }
    
    /**
     * Load the data into the datagrid
     */
    function onReload()
    {
        $this->datagrid->clear();
        
              //Busca dados
        $file = "http://localhost/gustavo/4/service/ListarTarefas.php";
        $json = file_get_contents($file);
        $lista = json_decode($json, true);
        foreach ($lista as $value) {
            // add an regular object to the datagrid
            $item = new StdClass;
            $item->id         = $value['id'];
            $item->titulo     = $value['titulo'];
            $item->descricao  = $value['descricao'];
            $item->prioridade = $value['prioridade'];
            $this->datagrid->addItem($item);
            
        }
        
    }

    /**
     * method onDelete()
     * Executed when the user clicks at the delete button
     */
    
    /**
     * method onView()
     * Executed when the user clicks at the view button
     */
    function onView($param)
    {
        // get the parameter and shows the message
        $key=$param['key'];
        new TMessage('info', "The name is : $key");
    }
    
    /**
     * shows the page
     */
    function show()
    {
        $this->onReload();
        parent::show();
    }
}