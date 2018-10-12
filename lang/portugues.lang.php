<?php
/** 
-----------------
Language: Spanish

* Parses and verifies the doc comments for files.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   HANDY-Q
 * @author    Javier de Juan <javier@textblock.org>
 * @copyright 2013 Javier de Juan Morón. Sevilla. España
 * @license   No license
 * @version   CVS:
 * @link      http://www.textblock.org
-----------------
*/


    !defined('PAGE_TITLE')  &&  define('PAGE_TITLE', 'Handy-Q. qualidade online'); 
    !defined('HEADER_TITLE')  &&  define('HEADER_TITLE', 'Sistemas da Qualidade'); 
    !defined('SITE_NAME') && define('SITE_NAME', 'Company,  Inc.'); 
    !defined('SLOGAN') && define('SLOGAN', 'zero defeitos'); 
    !defined('HEADING') && define('HEADING', 'título'); 

//  General 

    !defined('APROBADO') && define('APROBADO', 'aprovado:'); 
    !defined('DATABASE_USERNAME') && define('DATABASE_USERNAME', 'Nome de usuário do banco de dados:'); 
    !defined('DATABASE_PASSWORD') && define('DATABASE_PASSWORD', 'A senha do usuário do banco de dados:'); 
    !defined('DATABASE_HOST') && define('DATABASE_HOST', 'Nome do servidor:'); 
    !defined('DATABASE_HOST_HELP') && define('DATABASE_HOST_HELP', 'Localhost * normalmente *. Deixar como aparece,  por padrão'); 
    !defined('DATABASE_NAME') && define('DATABASE_NAME', 'Banco de dados de nome:'); 
    !defined('DATABASE_NAME_HELP') && define('DATABASE_NAME_HELP', 'O nome do banco de dados que será criado tabelas,  esse instalador:'); 
    !defined('DATABASE_INSTALL_ADVICE') && define('DATABASE_INSTALL_ADVICE', 'Preencha o formulário para criar as tabelas no banco de dados. Nota: Lembre-se de colocar a mesma conexão no arquivo .. / includes / mysql.php. Você deve excluir este arquivo insltalación quando terminar.'); 
    !defined('ANADIR') && define('ANADIR', 'adicionar'); 
    !defined('DOCUMENTOS') && define('DOCUMENTOS', 'documentos'); 
    !defined('ADVERTICE') && define('ADVERTICE', 'Clique para detalhes'); 
    !defined('FECHA') && define('FECHA', 'data'); 
    !defined('ANO') && define('ANO', 'ano'); 
    !defined('HORA') && define('HORA', 'tempo'); 
    !defined('RESULTADO') && define('RESULTADO', 'resultar'); 
    !defined('DOCUMENTACION') && define('DOCUMENTACION', 'documentação'); 
    !defined('BACK') && define('BACK', 'de volta'); 
    !defined('ESTADO') && define('ESTADO', 'estado'); 
    !defined('ACTUALIZAR') && define('ACTUALIZAR', 'atualizar'); 
    !defined('ENVIAR') && define('ENVIAR', 'enviar'); 
    !defined('DELETE_ADVERTICE') && define('DELETE_ADVERTICE', 'O botão Excluir na parte inferior da lista'); 
    !defined('IDIOMA') && define('IDIOMA', 'Selecione Linguagem'); 
    !defined('VISIBLE') && define('VISIBLE', 'Visível?'); 
    !defined('CODIGO') && define('CODIGO', 'código'); 
    !defined('NOMBRE_INCIDENCIA') && define('NOMBRE_INCIDENCIA', 'Nome incidência'); 
    !defined('SELECCIONE_EL_CODIGO') && define('SELECCIONE_EL_CODIGO', 'Selecione o código. O padrão é 0 código sem intercorrências. Se outro código aparecer,  selecione-o na lista drop-down. Embora a descrição aparece,  leva apenas o valor numérico,  para automatizar o incidente indicador inspeção gráfica.'); 
    !defined('ANO') && define('ANO', 'ano'); 
    !defined('ABRIR') && define('ABRIR', 'abrir'); 
    !defined('BUSCAR') && define('BUSCAR', 'Pesquisar!'); 
    !defined('RESPONSABLE') && define('RESPONSABLE', 'responsável'); 
    !defined('TERMINACION') && define('TERMINACION', 'terminação'); 
    !defined('LIMITE') && define('LIMITE', 'limitar'); 
    !defined('OBSERVACIONES') && define('OBSERVACIONES', 'observações'); 
    !defined('BORRAR') && define('BORRAR', 'excluir'); 
    !defined('CLIENTE') && define('CLIENTE', 'cliente'); 
    !defined('INDICADOR') && define('INDICADOR', 'indicador'); 
    !defined('ACTIVO') && define('ACTIVO', 'ativo'); 
    !defined('INACTIVO') && define('INACTIVO', 'inativo'); 
    !defined('VOLVER') && define('VOLVER', 'voltar'); 
    !defined('MODIFICAR') && define('MODIFICAR', 'mod    ificar'); 
    !defined('CIF') && define('CIF', 'CIF'); 
    !defined('DIRECCION') && define('DIRECCION', 'endereço'); 
    !defined('COMENTARIOS') && define('COMENTARIOS', 'comentários'); 
    !defined('ANO_MES_DIA') && define('ANO_MES_DIA', 'Ano-mês-dia'); 
    !defined('LISTA') && define('LISTA', 'lista'); 
    !defined('PRESENTACION') && define('PRESENTACION', 'Handy-q é um software para a gestão de qualidade de escritório on-line'); 
    !defined('AYUDA') && define('AYUDA', 'ajudar'); 
    !defined('ULTIMO_COMUNICADO') && define('ULTIMO_COMUNICADO', 'última declaração'); 
    !defined('IMPRIMIR') && define('IMPRIMIR', 'Imprimir o registro'); 
    !defined('IMPRIMIR_PAPEL') && define('IMPRIMIR_PAPEL', 'Imprimir em papel'); 
    !defined('ERROR_ANADIR_REGISTRO') && define('ERROR_ANADIR_REGISTRO', 'Falha ao adicionar o registro'); 
    !defined('CONTENIDO') && define('CONTENIDO', 'conteúdo'); 
    !defined('VEHICULOS') && define('VEHICULOS', 'veículos'); 
    !defined('BACKUP') && define('BACKUP', 'Fazer o backup do banco de dados'); 
    !defined('ESCRITORIO') && define('ESCRITORIO', 'As mensagens recebidas ->'); 
    !defined('CUESTIONARIO_TALLER') && define('CUESTIONARIO_TALLER', 'Questionário de oficina'); 
    !defined('PRODUCCION') && define('PRODUCCION', 'produção'); 
    !defined('CALIDAD') && define('CALIDAD', 'qualidade'); 
    !defined('ALMACEN') && define('ALMACEN', 'armazenar'); 
    !defined('COMPRAS') && define('COMPRAS', 'compras'); 
    !defined('FORMACION') && define('FORMACION', 'treinamento'); 
     !defined('TALLER') && define('TALLER', 'oficina'); 
    !defined('PAGINAR') && define('PAGINAR', 'paginar'); 
    !defined('DESCRIPCION') && define('DESCRIPCION', 'descrição'); 
    !defined('ACCION') && define('ACCION', 'ação'); 
    !defined('PROCEDIMIENTO') && define('PROCEDIMIENTO', 'procedimento'); 
    !defined('LUGAR') && define('LUGAR', 'lugar'); 
    !defined('DESVIACION') && define('DESVIACION', 'desvio'); 
    !defined('OPERATIVO') && define('OPERATIVO', 'operação'); 
    !defined('BAJA') && define('BAJA', 'baixo'); 
    !defined('EDITAR') && define('EDITAR', 'editar'); 
    !defined('EXPLORAR_ARCHIVOS') && define('EXPLORAR_ARCHIVOS', 'Procurar arquivos'); 
    !defined('IMAGEN_URL') && define('IMAGEN_URL', 'Link da imagem'); 
    !defined('IMAGEN') && define('IMAGEN', 'imagem'); 
    !defined('IMAGEN_URLHELP') && define('IMAGEN_URLHELP', 'Você deve colocar o link para a imagem'); 
    !defined('INCIDENCIA') && define('INCIDENCIA', 'incidência'); 
    !defined('RECUERDE_LOS_CODIGOS') && define('RECUERDE_LOS_CODIGOS', '0. Sem incidentes <br />1. instrumental  2. Falta de produto /><br /> 3. Tratamento deficiente <br />4. Falta de medidas de protecção <br /> 5. Falta de planejamento do trabalho <br /> 6. Falta de tratamentos <br /> cert    ificados 7. Falta de roupas,  produtos de higiene pessoal e higiene pessoal <br /> 8. Falta de conservação e limpeza do veículo.'); 
    !defined('ACTIVIDAD') && define('ACTIVIDAD', 'atividade'); 
    !defined('OBJETIVOS') && define('OBJETIVOS', 'Objectivos de qualidade.'); 
    !defined('CLIENTES') && define('CLIENTES', 'Clientes.'); 
    !defined('SATISFACCION') && define('SATISFACCION', 'Satisfação.'); 
 
    !defined('QUEJASCLIENTE') && define('QUEJASCLIENTE', 'Reclamações.'); 
    !defined('INDICADORES_MEDICIONANALISISYMEJORA') && define('INDICADORES_MEDICIONANALISISYMEJORA', 'Indicadores do MAM.'); 
    !defined('AUDITORIAS') && define('AUDITORIAS', 'Auditorias.'); 
    !defined('NOCONFORMIDADESYMEJORAS') && define('NOCONFORMIDADESYMEJORAS', 'Não-conformidades e melhoria.'); 
    !defined('POLITICADECALIDAD') && define('POLITICADECALIDAD', 'Política de Qualidade.'); 
    !defined('CAMBIOS') && define('CAMBIOS', 'Mudanças que podem afetar o sistema.'); 
    !defined('RECOMENDACIONESYCONCLUSIONES') && define('RECOMENDACIONESYCONCLUSIONES', 'Recomendações e conclusões.'); 
    !defined('CODIGO_INCIDENCIA') && define('CODIGO_INCIDENCIA', 'Código de incidência:'); 
    !defined('INSPECCIONES_CODIGOSINCIDENCIAS_HELP') && define('INSPECCIONES_CODIGOSINCIDENCIAS_HELP', 'Sempre coloque um código numérico. Se não,  o controlo de incidentes gráfico não é desenhado.'); 
    !defined('SELECCIONAR_Y_BORRAR') && define('SELECCIONAR_Y_BORRAR', 'Selecione e exclua'); 
    !defined('DISTRIBUIDO') && define('DISTRIBUIDO', 'distribuindo'); 
    !defined('BORRAR_SELECCIONADOS') && define('BORRAR_SELECCIONADOS', 'excluir selecionados'); 
 


// ------------------------------------------------------------------------ Menu OFF
    !defined('MENU_ALT_ADMINISTRAR_DOCUMENTOS_OFF') && define('MENU_ALT_ADMINISTRAR_DOCUMENTOS_OFF', 'Você deve fazer login para gerenciar documentos.'); 
    !defined('MENU_ALT_ANOTAR_DOCUMENTOS_OFF') && define('MENU_ALT_ANOTAR_DOCUMENTOS_OFF', 'Você deve fazer login para escrever um artigo.'); 
    !defined('MENU_ALT_BORRAR_DOCUMENTOS_OFF') && define('MENU_ALT_BORRAR_DOCUMENTOS_OFF', 'Você deve fazer login para eliminar um documento.'); 
    !defined('MENU_ALT_MODIFICAR_CATEGORIAS_OFF') && define('MENU_ALT_MODIFICAR_CATEGORIAS_OFF', 'Você deve fazer login para editar categorias.'); 


// ---------------------------------------------------------------------------------------------------------- Menu

    !defined('MENU_DOCUMENTOS') && define('MENU_DOCUMENTOS', 'Docs.'); 
    !defined('MENU_OTROS_DOCUMENTOS') && define('MENU_OTROS_DOCUMENTOS', 'Outro controle de documentos.'); 
    !defined('MENU_BDDOCS') && define('MENU_BDDOCS', 'BD docs.'); 
    !defined('MENU_MODIFDOCS') && define('MENU_MODIFDOCS', 'Mod    if. docs.'); 
    !defined('MENU_AUDITORIAS') && define('MENU_AUDITORIAS', 'auditorias'); 
    !defined('MENU_AINFORMES') && define('MENU_AINFORMES', 'AI_informes'); 
    !defined('MENU_AUDITORES') && define('MENU_AUDITORES', 'auditores'); 
    !defined('MENU_INSPECCIONES') && define('MENU_INSPECCIONES', 'inspeções'); 
    !defined('MENU_INSPECTORES') && define('MENU_INSPECTORES', 'inspetores'); 
    !defined('MENU_OBJETIVOS') && define('MENU_OBJETIVOS', 'objetivos'); 
    !defined('MENU_PARTES') && define('MENU_PARTES', 'Planilhas'); 
    !defined('MENU_TRABAJADORES') && define('MENU_TRABAJADORES', 'empregado'); 
    !defined('MENU_SERVICIOS') && define('MENU_SERVICIOS', 'serviços'); 
    !defined('MENU_PROVEEDORES') && define('MENU_PROVEEDORES', 'fornecedores'); 
    !defined('MENU_FORMACION') && define('MENU_FORMACION', 'cursos'); 
    !defined('MENU_AVISOS') && define('MENU_AVISOS', 'Avisos'); 
    !defined('MENU_ENCUESTAS') && define('MENU_ENCUESTAS', 'enquetes'); 
    !defined('MENU_ALT_ADMINISTRAR_DOCUMENTOS') && define('MENU_ALT_ADMINISTRAR_DOCUMENTOS', 'Adicionar um documento rapidamente (por que você precisa saber a memória de código da categoria a que pertence,  ou mod    ifica um documento existente para erros quando marcou'); 
    !defined('MENU_ALT_MAPA_DOCUMENTOS') && define('MENU_ALT_MAPA_DOCUMENTOS', 'Mapa do Documento: Mostra nossas categorias de árvores documentais de documentos'); 
    !defined('MENU_ALT_ANOTAR_DOCUMENTOS') && define('MENU_ALT_ANOTAR_DOCUMENTOS', 'Anotar um documento: forma correta de escrever um papel. Isso envia uma solicitação ao administrador para a aprovação do documento. Desde então,  exibida na lista geral'); 
    !defined('MENU_ALT_ANOTAR_DOCMANAGER') && define('MENU_ALT_ANOTAR_DOCMANAGER', 'Insira um documento diretamente no banco de dados,  para documentos usados com freqüência.'); 
    !defined('MENU_ALT_EDITAR_BDDOC') && define('MENU_ALT_EDITAR_BDDOC', 'Editar documentos são inseridos diretamente no banco de dados.'); 
    !defined('MENU_ALT_APROBAR_DOCUMENTOS') && define('MENU_ALT_APROBAR_DOCUMENTOS', 'Aprovar um documento que foi observado anteriormente.'); 
    !defined('MENU_ALT_SUBIR_DOCUMENTOS') && define('MENU_ALT_SUBIR_DOCUMENTOS', 'Upload de documentos: upload'); 
    !defined('MENU_ALT_BUSCAR_DOCUMENTOS') && define('MENU_ALT_BUSCAR_DOCUMENTOS', 'Encontre um documento'); 
    !defined('MENU_ALT_BORRAR_DOCUMENTOS') && define('MENU_ALT_BORRAR_DOCUMENTOS', 'Exclusão de um documento'); 
    !defined('MENU_ALT_LISTA_DOCUMENTOS') && define('MENU_ALT_LISTA_DOCUMENTOS', 'Lista geral de documentos: lista de class    ificados por id documento'); 
    !defined('MENU_ALT_MODIFICAR_CATEGORIAS') && define('MENU_ALT_MODIFICAR_CATEGORIAS', 'Gerencia árvore documentário categoria: Adicionar,  mod    ificar,  apagar.'); 
    !defined('MENU_ALT_MODIFDOC') && define('MENU_ALT_MODIFDOC', 'Gerenciar alterações do documento: Anotar ou mod    ificar as alterações feitas em documentos específicos'); 
    !defined('MENU_ALT_BORRAR_MODIFDOC') && define('MENU_ALT_BORRAR_MODIFDOC', 'Mudanças claras feitas a documentos específicos'); 
    !defined('MENU_ALT_DOC_PRINTSCREEN') && define('MENU_ALT_DOC_PRINTSCREEN', 'Documentos de amostra diretamente nas inserções de banco de dados,  os de muito uso.'); 
    !defined('MENU_ALT_ADMINISTRAR_AUDITORIAS') && define('MENU_ALT_ADMINISTRAR_AUDITORIAS', 'Gerenciando auditorias'); 
    !defined('MENU_ALT_ADMINISTRAR_AINFORMES') && define('MENU_ALT_ADMINISTRAR_AINFORMES', 'Gerenciar relatórios de auditoria'); 
    !defined('MENU_ALT_IMPRIMIR_AUDITORIAS') && define('MENU_ALT_IMPRIMIR_AUDITORIAS', 'Imprimir Auditoria'); 
    !defined('MENU_ALT_IMPRIMIR_AINFORMES') && define('MENU_ALT_IMPRIMIR_AINFORMES', 'Imprimir Relatório de Auditoria'); 
    !defined('MENU_ALT_BORRAR_AUDITORIAS') && define('MENU_ALT_BORRAR_AUDITORIAS', 'Auditorias clara'); 
    !defined('MENU_ALT_BORRAR_AINFORMES') && define('MENU_ALT_BORRAR_AINFORMES', 'Relatório de auditoria clara'); 
    !defined('MENU_ALT_BUSCAR_AUDITORIAS') && define('MENU_ALT_BUSCAR_AUDITORIAS', 'Auditorias pesquisa'); 
    !defined('MENU_ALT_BUSCAR_AINFORMES') && define('MENU_ALT_BUSCAR_AINFORMES', 'Pesquisar relatório de auditoria'); 
    !defined('MENU_ALT_LISTA_AUDITORIAS') && define('MENU_ALT_LISTA_AUDITORIAS', 'Lista de auditorias'); 
    !defined('MENU_ALT_LISTA_AINFORMES') && define('MENU_ALT_LISTA_AINFORMES', 'Lista dos relatórios de auditoria'); 
    !defined('MENU_ALT_ADMINISTRAR_AUDITOR') && define('MENU_ALT_ADMINISTRAR_AUDITOR', 'Gerenciando auditor'); 
    !defined('MENU_ALT_IMPRIMIR_AUDITOR') && define('MENU_ALT_IMPRIMIR_AUDITOR', 'Auditor de impressão'); 
    !defined('MENU_ALT_BORRAR_AUDITOR') && define('MENU_ALT_BORRAR_AUDITOR', 'Auditor clara'); 
    !defined('MENU_ALT_ADMINISTRAR_INSPECCION') && define('MENU_ALT_ADMINISTRAR_INSPECCION', 'Administrar inspeções'); 
    !defined('MENU_ALT_ADMINISTRAR_INCIDENCIASINSPECCION') && define('MENU_ALT_ADMINISTRAR_INCIDENCIASINSPECCION', 'Gerenciando incidências de inspeção'); 
    !defined('MENU_ALT_IMPRIMIR_INSPECCION') && define('MENU_ALT_IMPRIMIR_INSPECCION', 'Imprimir inspeção'); 
    !defined('MENU_ALT_BORRAR_INSPECCION') && define('MENU_ALT_BORRAR_INSPECCION', 'Inspecção clara'); 
    !defined('MENU_ALT_BUSCAR_INSPECCION') && define('MENU_ALT_BUSCAR_INSPECCION', 'Inspeção de pesquisa'); 
    !defined('MENU_ALT_JOIN_INSPECCIONES') && define('MENU_ALT_JOIN_INSPECCIONES', 'Número de inspecções por serviço'); 
    !defined('MENU_ALT_ADMINISTRAR_INSPECTOR') && define('MENU_ALT_ADMINISTRAR_INSPECTOR', 'Inspetores de gestão'); 
    !defined('MENU_ALT_IMPRIMIR_INSPECTOR') && define('MENU_ALT_IMPRIMIR_INSPECTOR', 'Inspetores de impressão'); 
    !defined('MENU_ALT_BORRAR_INSPECTOR') && define('MENU_ALT_BORRAR_INSPECTOR', 'Inspetores claras'); 
    !defined('MENU_ALT_ADMINISTRAR_OBJETIVOS') && define('MENU_ALT_ADMINISTRAR_OBJETIVOS', 'Administrar objetivos: Adicionar e mod    ificar'); 
    !defined('MENU_ALT_IMPRIMIR_OBJETIVOS') && define('MENU_ALT_IMPRIMIR_OBJETIVOS', 'Exibe detalhes alvo'); 
    !defined('MENU_ALT_BORRAR_OBJETIVOS') && define('MENU_ALT_BORRAR_OBJETIVOS', 'Objetivos claros'); 
    !defined('MENU_ALT_BUSCAR_OBJETIVOS') && define('MENU_ALT_BUSCAR_OBJETIVOS', 'Alvos de busca'); 
    !defined('MENU_ALT_LISTA_OBJETIVOS') && define('MENU_ALT_LISTA_OBJETIVOS', 'Lista alvo'); 
    !defined('MENU_ALT_ADDTASK_OBJETIVOS') && define('MENU_ALT_ADDTASK_OBJETIVOS', 'Adicionar uma tarefa para um alvo'); 
    !defined('MENU_ALT_JOIN_OBJETIVOS') && define('MENU_ALT_JOIN_OBJETIVOS', 'Tarefas de amostras correspondentes a cada objetivo'); 
    !defined('MENU_ALT_ADMINISTRAR_PARTES') && define('MENU_ALT_ADMINISTRAR_PARTES', 'Gerenciando peças de funcionamento: Adicionar e alterar'); 
    !defined('MENU_ALT_IMPRIMIR_PARTES') && define('MENU_ALT_IMPRIMIR_PARTES', 'Exibe os detalhes da festa'); 
    !defined('MENU_ALT_BORRAR_PARTES') && define('MENU_ALT_BORRAR_PARTES', 'Retire as peças'); 
    !defined('MENU_ALT_BUSCAR_PARTES') && define('MENU_ALT_BUSCAR_PARTES', 'Grupos de busca'); 
    !defined('MENU_ALT_ADMINISTRAR_EXTINTORES') && define('MENU_ALT_ADMINISTRAR_EXTINTORES', 'Gerenciando extintores: Adicionar e editar'); 
    !defined('MENU_ALT_IMPRIMIR_EXTINTORES') && define('MENU_ALT_IMPRIMIR_EXTINTORES', 'Mostra os detalhes do extintor'); 
    !defined('MENU_ALT_BORRAR_EXTINTORES') && define('MENU_ALT_BORRAR_EXTINTORES', 'Extintores de claras'); 
    !defined('MENU_ALT_BUSCAR_EXTINTORES') && define('MENU_ALT_BUSCAR_EXTINTORES', 'Pesquisa extintor'); 
    !defined('MENU_ALT_LISTA_EXTINTORES') && define('MENU_ALT_LISTA_EXTINTORES', 'Lista de extintores'); 
    !defined('MENU_ALT_ADMINISTRAR_TRABAJADORES') && define('MENU_ALT_ADMINISTRAR_TRABAJADORES', 'Gerenciando os trabalhadores: Adicionar e editar'); 
    !defined('MENU_ALT_BORRAR_TRABAJADORES') && define('MENU_ALT_BORRAR_TRABAJADORES', 'Trabalhadores claras'); 
    !defined('MENU_ALT_ADMINISTRAR_SERVICIOS') && define('MENU_ALT_ADMINISTRAR_SERVICIOS', 'Gerenciamento de Serviços: Adicionar e alterar'); 
    !defined('MENU_ALT_BORRAR_SERVICIOS') && define('MENU_ALT_BORRAR_SERVICIOS', 'Excluir serviços'); 
    !defined('MENU_ALT_CONTROLAVISOS') && define('MENU_ALT_CONTROLAVISOS', 'Controlar lembretes de serviço'); 
    !defined('MENU_ALT_GRAFICAVISOS') && define('MENU_ALT_GRAFICAVISOS', 'Anúncios gráficos para mês'); 
    !defined('MENU_ALT_ADMINISTRAR_FORMACION') && define('MENU_ALT_ADMINISTRAR_FORMACION', 'Gerenciando formação: Adicionar e editar'); 
    !defined('MENU_ALT_BORRAR_FORMACION') && define('MENU_ALT_BORRAR_FORMACION', 'Treinamento claro'); 
    !defined('MENU_ALT_LISTA_FORMACION') && define('MENU_ALT_LISTA_FORMACION', 'Lista de cursos'); 
    !defined('MENU_ALT_JOIN_FORMACION') && define('MENU_ALT_JOIN_FORMACION', 'Cursos por trabalhador'); 
    !defined('MENU_ALT_ADMINISTRAR_EQUIPOS') && define('MENU_ALT_ADMINISTRAR_EQUIPOS', 'Como Gerir equipas: Adicionar e editar'); 
    !defined('MENU_ALT_IMPRIMIR_EQUIPOS') && define('MENU_ALT_IMPRIMIR_EQUIPOS', 'Mostra os detalhes do equipamento de medição'); 
    !defined('MENU_ALT_BORRAR_EQUIPOS') && define('MENU_ALT_BORRAR_EQUIPOS', 'Equipamentos de medição Excluir'); 
    !defined('MENU_ALT_BUSCAR_EQUIPOS') && define('MENU_ALT_BUSCAR_EQUIPOS', 'Equipamentos de medição de pesquisa'); 
    !defined('MENU_ALT_LISTA_EQUIPOS') && define('MENU_ALT_LISTA_EQUIPOS', 'Lista de equipamento de medição'); 
    !defined('MENU_ALT_ADMINISTRAR_CALIBRACIONES') && define('MENU_ALT_ADMINISTRAR_CALIBRACIONES', 'Gerenciando calibrações: Adicionar e editar'); 
    !defined('MENU_ALT_IMPRIMIR_CALIBRACIONES') && define('MENU_ALT_IMPRIMIR_CALIBRACIONES', 'Exibe detalhes de calibração'); 
    !defined('MENU_ALT_BORRAR_CALIBRACIONES') && define('MENU_ALT_BORRAR_CALIBRACIONES', 'calibrações claras'); 
    !defined('MENU_ALT_BUSCAR_CALIBRACIONES') && define('MENU_ALT_BUSCAR_CALIBRACIONES', 'calibração de pesquisa'); 
    !defined('MENU_ALT_LISTA_CALIBRACIONES') && define('MENU_ALT_LISTA_CALIBRACIONES', 'Calibrações lista'); 
    !defined('MENU_ALT_JOIN_CALIBRACIONES') && define('MENU_ALT_JOIN_CALIBRACIONES', 'Mostrar calibrações por equipe'); 
    !defined('MENU_REVSISTEMA') && define('MENU_REVSISTEMA', 'sistema de avaliação'); 
    !defined('MENU_IMPRIMIR_REVSISTEMA') && define('MENU_IMPRIMIR_REVSISTEMA', 'Imprimir Revisão de sistema'); 
 
    !defined('MENU_NCS') && define('MENU_NCS', 'não-conformidades'); 
 

// ------------------------------------------------------- Revisión del sistema

    !defined('REVSISTEMA_PRINT_DETAILS') && define('REVSISTEMA_PRINT_DETAILS', 'Revisão da data'); 
     !defined('REVSISTEMA_INDICADORES') && define('REVSISTEMA_INDICADORES', 'Indicadores de qualidade'); 
     !defined('REVSISTEMA_LISTA_PRINTSCREEN') && define('REVSISTEMA_LISTA_PRINTSCREEN', 'Corrigir lista'); 
    !defined('REVSISTEMA_NUM') && define('REVSISTEMA_NUM', 'Revisão não'); 
    !defined('REVSISTEMA_ADVERTICE') && define('REVSISTEMA_ADVERTICE', 'Clique em uma revisão para imprimir'); 

//  Cuestionarios al SGC // Cuestionarios al SGC 

    !defined('CUESTIONARIO_TRATAMIENTOS') && define('CUESTIONARIO_TRATAMIENTOS', 'Serviço questionário'); 
    !defined('CUESTIONARIO_CALIDAD') && define('CUESTIONARIO_CALIDAD', 'Questionário para dep. qualidade'); 
    !defined('CUESTIONARIO_ALMACEN') && define('CUESTIONARIO_ALMACEN', 'Questionário para armazenar'); 
    !defined('CUESTIONARIO_COMPRAS') && define('CUESTIONARIO_COMPRAS', 'Questionário para comprar'); 
    !defined('CUESTIONARIO_FORMACION') && define('CUESTIONARIO_FORMACION', 'Questionário para treinamento'); 
    !defined('CUESTIONARIO_DOCUMENTACION') && define('CUESTIONARIO_DOCUMENTACION', 'Questionário para documentação'); 
    !defined('CUESTIONARIO_LEGIONELLA') && define('CUESTIONARIO_LEGIONELLA', 'Questionário para legionella'); 


//  Indicadores 

    !defined('INDICADORES_INDICADORES') && define('INDICADORES_INDICADORES', 'indicadores'); 
    !defined('INDICADORES_NCSPORAREA') && define('INDICADORES_NCSPORAREA', 'Número de não-conformidades por área'); 
    !defined('INDICADORES_DESVIACIONCIERRESNCS') && define('INDICADORES_DESVIACIONCIERRESNCS', 'Desvios de fechar não-conformidades'); 
    !defined('INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR') && define('INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR', 'Total de horas de treinamento por funcionário'); 
    !defined('INDICADORES_GRAFICACONTROLAVISOS') && define('INDICADORES_GRAFICACONTROLAVISOS', 'Percentagem de anúncios por mês'); 
    !defined('INDICADORES_GRAFICAINCIDENCIASINSPECCIONES') && define('INDICADORES_GRAFICAINCIDENCIASINSPECCIONES', 'Incidentes em inspecções de serviço'); 
    !defined('INDICADORES_NOCONFORMIDADESPORAREA') && define('INDICADORES_NOCONFORMIDADESPORAREA', 'Não-conformidades por área'); 
     !defined('INDICADORES_INCIDENCIASDEINSPECCION') && define('INDICADORES_INCIDENCIASDEINSPECCION', 'Incidentes em inspecções de serviço'); 
 
    !defined('INDICADORES_DERECURSOS') && define('INDICADORES_DERECURSOS', 'indicadores REC'); 
    !defined('INDICADORES_FORMACIONANUAL') && define('INDICADORES_FORMACIONANUAL', 'Horas de formação anuais'); 
    !defined('INDICADORES_INCIDENCIASDEALMACEN') && define('INDICADORES_INCIDENCIASDEALMACEN', 'Incidentes de estoque'); 
    !defined('INDICADORES_DEPRODUCCION') && define('INDICADORES_DEPRODUCCION', 'Indicadores OP (em funcionamento)'); 
    !defined('INDICADORES_INCIDENCIASDEPROVEEDOR') && define('INDICADORES_INCIDENCIASDEPROVEEDOR', 'Fornecedor incidentes'); 
 



//  Avisos 


    !defined('AVISOS_AVISOS') && define('AVISOS_AVISOS', 'Avisos'); 
    !defined('AVISOS_AVISO') && define('AVISOS_AVISO', 'Atenção!'); 
    !defined('AVISOS_DETALLES') && define('AVISOS_DETALLES', 'Detalhes do anúncio'); 
    !defined('AVISOS_COMUNICADOPOR') && define('AVISOS_COMUNICADOPOR', 'comunicada por'); 
    !defined('AVISOS_LISTAVISOS') && define('AVISOS_LISTAVISOS', 'Área de Trabalho lista de not    ificação'); 
    !defined('AVISOS_PONERAVISO') && define('AVISOS_PONERAVISO', 'Publicar um desktop anúncio'); 
    !defined('AVISOS_THEAD_ADVERTICE') && define('AVISOS_THEAD_ADVERTICE', 'Clique em um link para ver os detalhes do anúncio'); 
    !defined('AVISOS_AVISO_BORRADO') && define('AVISOS_AVISO_BORRADO', 'Observe apagado!'); 
    !defined('AVISOS_ADMIN') && define('AVISOS_ADMIN', 'Gerenciando anúncios de desktop'); 
    !defined('AVISOS_DELETE') && define('AVISOS_DELETE', 'remova os anúncios'); 
    !defined('AVISOS_PONER_AVISO') && define('AVISOS_PONER_AVISO', 'Publicar um anúncio'); 


//  Documentos 


    !defined('DOCUMENTOS_MAPA') && define('DOCUMENTOS_MAPA', 'Mapa do documento'); 
    !defined('DOCUMENTOS_DOCUMENTO') && define('DOCUMENTOS_DOCUMENTO', 'documento'); 
    !defined('APROBAR_DOCUMENTOS') && define('APROBAR_DOCUMENTOS', 'aprovar documentos'); 
    !defined('BORRAR_DOCUMENTO') && define('BORRAR_DOCUMENTO', 'excluir documento'); 
    !defined('EDITAR_BORRAR_DOCUMENTO') && define('EDITAR_BORRAR_DOCUMENTO', 'Editar e excluir documentos'); 
    !defined('SUBIR_DOCUMENTOS') && define('SUBIR_DOCUMENTOS', 'upload de documentos'); 
    !defined('BUSCAR_DOCUMENTOS') && define('BUSCAR_DOCUMENTOS', 'Documentos da pesquisa'); 
    !defined('DOCUMENTO_BORRADO') && define('DOCUMENTO_BORRADO', 'Documento apagado!'); 
    !defined('NOMBRE_DOCUMENTO') && define('NOMBRE_DOCUMENTO', 'Título'); 
    !defined('DOCUMENTO_AUTOR') && define('DOCUMENTO_AUTOR', 'Autor'); 
    !defined('DOCUMENTOS_ANADIR_DOCUMENTO') && define('DOCUMENTOS_ANADIR_DOCUMENTO', 'Adicionar documento'); 
    !defined('DOCUMENTOS_ADMINISTRAR_DOCUMENTOS') && define('DOCUMENTOS_ADMINISTRAR_DOCUMENTOS', 'Gerenciar Documentos'); 
    !defined('DOCUMENTOS_CAMBIAR_DOCUMENTO') && define('DOCUMENTOS_CAMBIAR_DOCUMENTO', 'Mod    ificar documento'); 
    !defined('DOCUMENTOS_MODIFICADOS') && define('DOCUMENTOS_MODIFICADOS', 'Documentos mod    ificado'); 
    !defined('DOCUMENTOS_IDSOLICITUD') && define('DOCUMENTOS_IDSOLICITUD', 'id pedido'); 
    !defined('DOCUMENTOS_SECCIONID') && define('DOCUMENTOS_SECCIONID', 'ID de seção'); 
    !defined('DOCUMENTOS_THEAD_ADVERTICE') && define('DOCUMENTOS_THEAD_ADVERTICE', 'Clique em um link para ver detalhes'); 
    !defined('DOCUMENTOS_THEAD_ADVERTICE_JOIN') && define('DOCUMENTOS_THEAD_ADVERTICE_JOIN', 'Clique em um documento para mostrar mudanças'); 
    !defined('DOCUMENTOS_PRINT_DETAILS') && define('DOCUMENTOS_PRINT_DETAILS', 'Detalhes do documento'); 
    !defined('DOCUMENTOS_MODIFDOC_ADMIN') && define('DOCUMENTOS_MODIFDOC_ADMIN', 'Alterações em documentos'); 
    !defined('EDITAR_BORRAR_MODIFDOC') && define('EDITAR_BORRAR_MODIFDOC', 'Editar e excluir alterações na mosca'); 
    !defined('DOCUMENTOS_ANOTAR_MODIFICACION') && define('DOCUMENTOS_ANOTAR_MODIFICACION', 'Observe a mudança'); 
    !defined('DOCUMENTOS_EDITAR_MODIFICACION') && define('DOCUMENTOS_EDITAR_MODIFICACION', 'Editar emenda'); 
    !defined('DOCUMENTOS_NUMEROREVISION') && define('DOCUMENTOS_NUMEROREVISION', 'Revisão não'); 
    !defined('DOCUMENTOS_MODIFICACION') && define('DOCUMENTOS_MODIFICACION', 'Mod    ificação'); 
    !defined('DOCUMENTOS_MODIFICACIONES') && define('DOCUMENTOS_MODIFICACIONES', 'Alterações ao documento:'); 
    !defined('DOCUMENTOS_CAPAPART') && define('DOCUMENTOS_CAPAPART', 'Capítulo-seção'); 
    !defined('DOCUMENTOS_LISTA') && define('DOCUMENTOS_LISTA', 'Lista de documentos'); 
    !defined('DOCUMENTOS_FECHAMODIFICACION') && define('DOCUMENTOS_FECHAMODIFICACION', 'Data de mod    ificação'); 
    !defined('DOCUMENTOS_MODIFICACIONES_DETALLES') && define('DOCUMENTOS_MODIFICACIONES_DETALLES', 'Detalhes da mod    ificação'); 
    !defined('DOCUMENTO_ACTUALIZADO') && define('DOCUMENTO_ACTUALIZADO', 'Revisado!'); 
    !defined('DOCUMENTOS_JOIN') && define('DOCUMENTOS_JOIN', 'Mudanças para documento'); 
    !defined('DOCUMENTOS_LISTA_MODIFICACIONES') && define('DOCUMENTOS_LISTA_MODIFICACIONES', 'Lista de alterações'); 
    !defined('DOCUMENTOS_BORRAR_MODIFICACION') && define('DOCUMENTOS_BORRAR_MODIFICACION', 'Emenda claro'); 
    !defined('DOCUMENTOS_MODIFICACION_QUIERE_BORRAR') && define('DOCUMENTOS_MODIFICACION_QUIERE_BORRAR', 'Você quer apagar essa mudança?'); 
    !defined('DOCUMENTOS_QUIERE_BORRAR') && define('DOCUMENTOS_QUIERE_BORRAR', 'Quer apagar este documento?'); 
    !defined('DOCUMENTOS_MODIFDOC_DELETED') && define('DOCUMENTOS_MODIFDOC_DELETED', 'Mod    ificação apagado!'); 
    !defined('MODIFICACION_ANOTADA') && define('MODIFICACION_ANOTADA', 'Mod    ificação anotado!'); 
    !defined('DOCUMENTOS_ULTIMAS_MODIFICACIONES') && define('DOCUMENTOS_ULTIMAS_MODIFICACIONES', 'Últimas Alterações'); 
    !defined('DOCUMENTOS_ULTIMA_REVISION') && define('DOCUMENTOS_ULTIMA_REVISION', 'Clique no botão para ver    ificar se o documento última revisão anotada. Documentos não listados emergente,  ou não tenham sido revistos ou não de revisão,  não sendo sujeitos a alterações.'); 
    !defined('DOCUMENTOS_IDSOLICITUD_HELP') && define('DOCUMENTOS_IDSOLICITUD_HELP', 'Coloque em ID imediatamente acima que aparece ao lado do campo de entrada'); 
     !defined('DOCUMENTOS_LINK_HELP') && define('DOCUMENTOS_LINK_HELP', 'Coloque o endereço da pasta que enviou o documento. Por exemplo: / uploads / qualidade / documento.pdf'); 
     !defined('DOCUMENTOS_CLAVE1_HELP') && define('DOCUMENTOS_CLAVE1_HELP', 'Coloque que distribuiu o documento.'); 


//  Documentos de la BD : docmanager 

    !defined('DOCMANAGER_PRINT') && define('DOCMANAGER_PRINT', 'Ver documentos BD'); 
    !defined('DOCMANAGER_INSERT') && define('DOCMANAGER_INSERT', 'Insira documento para a BD'); 


//  Auditores 

    !defined('AUDITORIAS_AUDITOR') && define('AUDITORIAS_AUDITOR', 'Auditor'); 
    !defined('AUDITORIAS_AUDITORIA') && define('AUDITORIAS_AUDITORIA', 'Auditar'); 
    !defined('AUDITOR_IMG') && define('AUDITOR_IMG', 'Auditor img'); 
    !defined('AUDITORES_EDITAR_AUDITOR') && define('AUDITORES_EDITAR_AUDITOR', 'Edite auditor'); 
    !defined('AUDITORES_AUDITOR_ACTUALIZADO') && define('AUDITORES_AUDITOR_ACTUALIZADO', 'Auditor atualizado!'); 
    !defined('AUDITORES_ADMINISTRAR_AUDITORES') && define('AUDITORES_ADMINISTRAR_AUDITORES', 'Auditores gestão'); 
    !defined('AUDITORES_DETALLES') && define('AUDITORES_DETALLES', 'Detalhes do auditor'); 
    !defined('AUDITORES_QUIERE_BORRAR') && define('AUDITORES_QUIERE_BORRAR', 'Auditor claro?'); 
    !defined('AUDITORES_AUDITOR_BORRADO') && define('AUDITORES_AUDITOR_BORRADO', 'Auditor apagado!'); 
    !defined('AUDITORIAS_ANADIR_AUDITOR') && define('AUDITORIAS_ANADIR_AUDITOR', 'Adicionar auditor'); 
    !defined('AUDITORIAS_CAMBIAR_AUDITOR') && define('AUDITORIAS_CAMBIAR_AUDITOR', 'Alterar auditor'); 
    !defined('AUDITORIAS_VER_AUDITOR') && define('AUDITORIAS_VER_AUDITOR', ' Lista de auditores'); 
    !defined('AUDITOR_ADVERTICE') && define('AUDITOR_ADVERTICE', 'Clique em um link para ver os detalhes do auditor'); 
    !defined('AUDITOR_LISTA') && define('AUDITOR_LISTA', 'Lista de auditores'); 



//  Informes de Auditorías 


    !defined('AINFORMES_JOIN') && define('AINFORMES_JOIN', 'Auditorias e Não Conformidades'); 
    !defined('AINFORMES_BUSCAR') && define('AINFORMES_BUSCAR', 'Pesquisar relatório de auditoria'); 
    !defined('AINFORMES_HOJA') && define('AINFORMES_HOJA', 'Folha'); 
    !defined('AINFORMES_EDITAR') && define('AINFORMES_EDITAR', 'Editar Relatório de Auditoria'); 
    !defined('AINFORMES_ADMINISTRAR') && define('AINFORMES_ADMINISTRAR', 'Gerenciar relatórios de auditoria'); 
    !defined('AINFORMES_NUMERO') && define('AINFORMES_NUMERO', 'Não AI'); 
    !defined('AINFORMES_ANADIR') && define('AINFORMES_ANADIR', 'Adicionar relatório de auditoria'); 
    !defined('AINFORMES_CAMBIAR') && define('AINFORMES_CAMBIAR', 'Alterar relatório de auditoria'); 
    !defined('AINFORMES_INFORME') && define('AINFORMES_INFORME', 'Relatório de Auditoria'); 
    !defined('AINFORMES_AREA_AUDITADA') && define('AINFORMES_AREA_AUDITADA', 'área auditada'); 
    !defined('AINFORMES_OBJETO') && define('AINFORMES_OBJETO', 'Objeto'); 
    !defined('AINFORMES_ADVERTICE') && define('AINFORMES_ADVERTICE', 'Clique em um link para ver detalhes'); 
    !defined('AINFORMES_LISTA_PRINTSCREEN') && define('AINFORMES_LISTA_PRINTSCREEN', 'Lista dos relatórios de auditoria'); 
    !defined('AINFORMES_PRINT_DETAILS') && define('AINFORMES_PRINT_DETAILS', 'Detalhes do relatório de auditoria'); 
    !defined('AINFORMES_PRINT_ADVERTICE') && define('AINFORMES_PRINT_ADVERTICE', 'Detalhes'); 
    !defined('AINFORMES_BACK_TO_PRINTLIST') && define('AINFORMES_BACK_TO_PRINTLIST', 'Voltar à lista'); 
    !defined('AINFORMES_AI') && define('AINFORMES_AI', 'Auditoria Interna'); 
    !defined('AINFORMES_BORRAR') && define('AINFORMES_BORRAR', 'Relatório de auditoria clara'); 
    !defined('AINFORMES_QUIERE_BORRAR') && define('AINFORMES_QUIERE_BORRAR', 'Relatório de auditoria clara?'); 
    !defined('AINFORMES_INFORME_BORRADO') && define('AINFORMES_INFORME_BORRADO', 'Relatório apagado!'); 
    !defined('AINFORMES_INFORME_ENVIAD0') && define('AINFORMES_INFORME_ENVIAD0', ' Relatório enviado'); 
    !defined('AINFORMES_PONER_OTRO') && define('AINFORMES_PONER_OTRO', 'Adicionar outro relatório'); 
    !defined('AINFORMES_ACTUALIZADO') && define('AINFORMES_ACTUALIZADO', 'Relatório actualizado!'); 

//  Auditorías 


    !defined('AUDITORIAS_JOIN') && define('AUDITORIAS_JOIN', 'Auditorias e Não Conformidades'); 
    !defined('AUDITORIAS_BUSCAR') && define('AUDITORIAS_BUSCAR', 'Auditorias pesquisa'); 
    !defined('AUDITORIAS_HOJA') && define('AUDITORIAS_HOJA', 'Folha'); 
    !defined('AUDITORIAS_EDITAR_AUDITORIA') && define('AUDITORIAS_EDITAR_AUDITORIA', 'Edite auditoria'); 
    !defined('AUDITORIAS_ADMINISTRAR_AUDITORIAS') && define('AUDITORIAS_ADMINISTRAR_AUDITORIAS', 'Gerenciando auditorias'); 
    !defined('AUDITORIAS_NUMERO_AUDITORIA') && define('AUDITORIAS_NUMERO_AUDITORIA', 'Não AI'); 
    !defined('AUDITORIAS_ANADIR_AUDITORIA') && define('AUDITORIAS_ANADIR_AUDITORIA', 'Adicionar auditoria'); 
    !defined('AUDITORIAS_CAMBIAR_AUDITORIA') && define('AUDITORIAS_CAMBIAR_AUDITORIA', 'Alterar a auditoria'); 
    !defined('AUDITORIAS_OBJETO') && define('AUDITORIAS_OBJETO', 'Objeto'); 
    !defined('AUDITORIAS_ADVERTICE') && define('AUDITORIAS_ADVERTICE', 'Clique em um link para ver detalhes'); 
    !defined('AUDITORIAS_LISTA_PRINTSCREEN') && define('AUDITORIAS_LISTA_PRINTSCREEN', 'Lista de auditorias'); 
    !defined('AUDITORIAS_PRINT_DETAILS') && define('AUDITORIAS_PRINT_DETAILS', 'Auditoria detalhes'); 
    !defined('AUDITORIAS_PRINT_ADVERTICE') && define('AUDITORIAS_PRINT_ADVERTICE', 'Detalhes'); 
    !defined('AUDITORIAS_BACK_TO_PRINTLIST') && define('AUDITORIAS_BACK_TO_PRINTLIST', 'Voltar à lista'); 
    !defined('AUDITORIAS_AI') && define('AUDITORIAS_AI', 'Auditoria Interna'); 
    !defined('AUDITORIAS_BORRAR_AUDITORIA') && define('AUDITORIAS_BORRAR_AUDITORIA', 'Auditoria clara'); 
    !defined('AUDITORIAS_QUIERE_BORRAR') && define('AUDITORIAS_QUIERE_BORRAR', 'Auditoria clara?'); 
    !defined('AUDITORIAS_AUDITORIA_BORRADA') && define('AUDITORIAS_AUDITORIA_BORRADA', 'Auditoria apagado!'); 
    !defined('AUDITORIAS_AUDITORIA_ENVIADA') && define('AUDITORIAS_AUDITORIA_ENVIADA', 'Auditoria enviada'); 
    !defined('AUDITORIAS_PONER_OTRA') && define('AUDITORIAS_PONER_OTRA', 'Adicionar outra auditoria'); 
    !defined('AUDITORIA_ACTUALIZADA') && define('AUDITORIA_ACTUALIZADA', 'Auditar data!'); 
    !defined('AUDITORIA_SERVICIO') && define('AUDITORIA_SERVICIO', 'Auditoria serviço'); 
    !defined('AUDITORIA_CALIDAD') && define('AUDITORIA_CALIDAD', 'Auditar o dep. qualidade'); 
    !defined('AUDITORIA_ALMACEN') && define('AUDITORIA_ALMACEN', 'Auditoria armazenados &racute; n'); 
    !defined('AUDITORIA_COMPRAS') && define('AUDITORIA_COMPRAS', 'Compras de auditoria'); 
    !defined('AUDITORIA_FORMACION') && define('AUDITORIA_FORMACION', 'Treinamento de auditoria'); 
    !defined('AUDITORIA_DOCUMENTACION') && define('AUDITORIA_DOCUMENTACION', 'Documentação de auditoria'); 
    !defined('AUDITORIA_TALLER') && define('AUDITORIA_TALLER', 'Workshop de Auditoria'); 
    !defined('AUDITORIAS_CODIGO_HELP') && define('AUDITORIAS_CODIGO_HELP', 'Lembre-se de cod    ificação auditorias. Coloque imediatamente acima que aparece ao lado do campo de entrada. Se você colocar AI1201,  AI1202 você deve colocar é,  auditoria,  02,  2012!'); 
    !defined('AUDITORIAS_BORRAR_AUDITOR') && define('AUDITORIAS_BORRAR_AUDITOR', 'Auditor clara'); 
    !defined('AUDITORIAS_CUESTIONARIOALSERVICIO') && define('AUDITORIAS_CUESTIONARIOALSERVICIO', '* Entrada desvios mensais em atendimento ao cliente <br /> * Entrada para o trabalho de documentação em falta <br /> * Confira o estoque mínimo veículo <br /> * Ver    ificar a limpeza e manutenção de veículos <br /> * Entrada ordens completar o trabalho <br /> trabalho * Ver    ifique'); 
    !defined('AUDITORIAS_CUESTIONARIOACALIDAD') && define('AUDITORIAS_CUESTIONARIOACALIDAD', '* Ver    ifique se você atualizou as regras (se aplicável) <br/> * Ver    ifique se os documentos necessários são distribuídos sistema e aprovado. <br /> * Archovo Ver    ificar documento <br/> * Ver    ifique se a lista de documentos efeito é atualizado <br/> * Ver    ifique se há atrasos em tarefas agendadas (auditorias,  objetivos,  treinamento,  indicadores,  inspecções) <br/> * Ver    ifique se os dados são atualizados no banco de dados que <br/> Confira observou o impacto dos fornecedores no banco de dados. <br/> * Ver    ifique se ter fechado o NC-AACCPP quando necessário,  bem como melhorias <br/> * Ver    ifique foram abordadas as reclamações dos clientes <br /> Ver    ificar indicadores de acompanhamento'); 
    !defined('AUDITORIAS_CUESTIONARIOALMACEN') && define('AUDITORIAS_CUESTIONARIOALMACEN', '* Ver    ifique sujeira e desordem nas prateleiras e equipamentos de trabalho. <br/> * Ver    ifique a sujeira no chão,  ou outros resíduos. <br/> * Ver    ifique a data de revisão,  sinalização e livre de obstáculos em extintores. <br/> * Ver    ifique se os acessos são claras de peças,  materiais,  caixas ou outros obstáculos que impedem a passagem de pessoas ou de meios de transporte <br/> * Ver    ifique o estado e adequação dos contêineres. <br / > * Ver    ifique o estado de segurança em instalações elétricas,  gerais e sistemas de iluminação. <br/> * Ver    ifique se os extintores são limpos,  cartões de revisão atuais e localizadas em áreas marcadas para eles. <br / > * Ver    ifique se os produtos estão livres de corrosão. <br/> * Ver    ifique se destaca. <br/> * Ver    ifique se não há materiais não ident    ificados. <br/> * Ver    ifique a ausência de depósito em contentores de resíduos áreas de armazenamento <br/> derrames Ver    ifique *.'); 
    !defined('AUDITORIAS_CUESTIONARIOACOMPRAS') && define('AUDITORIAS_CUESTIONARIOACOMPRAS', '* Ver    ifique se há cert    ificações falta ou aprovações de fornecedores e produtos. <br/> * Ver    ifique se todas as questões ficaram anotados com fornecedores. <br/> * Ver    ifique se o pessoal sabe o caminho certo para receber o materiais. <br/> * Ver    ifique se cada provedor tem avaliado eo resultado é contado. <br/> * Ver    ifique se as faturas ou notas de encomenda são arquivados corretamente e assinado pela pessoa que recepciona. < br /> * Ver    ifique a aprovação de facturas com notas de entrega.'); 
    !defined('AUDITORIAS_CUESTIONARIOAFORMACION') && define('AUDITORIAS_CUESTIONARIOAFORMACION', '* Ver    ificar os registros de status de atualização de treinamento em banco de dados. <br/> * Ver    ifique cartões. <br/> * Ver    ifique revalidação. <br/> * Ver    ifique os cursos ministrados.'); 
    !defined('AUDITORIAS_CUESTIONARIOADOCUMENTACION') && define('AUDITORIAS_CUESTIONARIOADOCUMENTACION', '* Ver    ifique os estados revisão. <br/> * Ver    ifique o status de armazenamento e arquivo. <br/> * Ver    ificar a declaração de distribuição adequada.'); 
    !defined('AUDITORIAS_CUESTIONARIOATALLER') && define('AUDITORIAS_CUESTIONARIOATALLER', '- Provado <br/> Gauges - Arrumação <br/> Workshop - Limpeza <br/> de veículos - Segurança e Prevenção <br/> - Documentação <br/> - <br /> separação zona - <br/> IDs de produtos - as operações de controle <br/>'); 
    !defined('AUDITORIAS_JOIN_HELP') && define('AUDITORIAS_JOIN_HELP', 'Se houver campos vazios na coluna de auditorias,  não-conformidade não é para nunguna auditoria ou relatório de auditoria interna não tem (auditorias,  por exemplo,  externo)'); 

//  -------------------------------------------------------------------------------------------NC`s 

    !defined('NCS_ADVERTICE') && define('NCS_ADVERTICE', 'Clique em um link para editar o inconformismo'); 
    !defined('NCS_DETAILS') && define('NCS_DETAILS', 'Detalhes NC'); 
    !defined('NCS_JOIN_ADVERTICE') && define('NCS_JOIN_ADVERTICE', 'Clique em um NC ou uma auditoria para ver detalhes'); 
    !defined('NCS_AUDITS_JOIN_LIST') && define('NCS_AUDITS_JOIN_LIST', 'NC e auditorias,  lista combinada. Clique para detalhes'); 
    !defined('NCS_ABRIR_NC') && define('NCS_ABRIR_NC', 'Abra uma não conformidade'); 
    !defined('NCS_ANADIR_NC') && define('NCS_ANADIR_NC', 'Adicionar NC'); 
    !defined('NCS_MODIFICAR_NC') && define('NCS_MODIFICAR_NC', 'mod    ificar NC'); 
    !defined('NCS_EDITAR_NC') && define('NCS_EDITAR_NC', 'Edição do NC'); 
    !defined('NCS_ADMINISTRAR_NCS') && define('NCS_ADMINISTRAR_NCS', 'NC de Gestão'); 
    !defined('NCS_IMPRIMIR_NCS') && define('NCS_IMPRIMIR_NCS', 'Auditorias & NC de'); 
    !defined('NCS_IMPRIMIR') && define('NCS_IMPRIMIR', 'NC tela de impressão'); 
    !defined('NCS_BUSCAR_NCS') && define('NCS_BUSCAR_NCS', 'Pesquisa do NC'); 
    !defined('NCS_BORRAR_NC') && define('NCS_BORRAR_NC', 'Limpar CN'); 
    !defined('NCS_QUIERE_BORRAR') && define('NCS_QUIERE_BORRAR', 'Limpar NC // s?'); 
    !defined('NCS_NC_BORRADA') && define('NCS_NC_BORRADA', 'NC borrarda!'); 
    !defined('NCS_NUMERO') && define('NCS_NUMERO', 'Página não'); 
    !defined('NCS_FECHA_APERTURA') && define('NCS_FECHA_APERTURA', 'Abra Data'); 
    !defined('NCS_CODIGO_NC') && define('NCS_CODIGO_NC', 'código'); 
    !defined('NCS_REFERENCIA_DOCUMENTAL') && define('NCS_REFERENCIA_DOCUMENTAL', 'ref doc'); 
    !defined('NCS_DESCRIPCION') && define('NCS_DESCRIPCION', 'descrição'); 
    !defined('NCS_REF_DOC') && define('NCS_REF_DOC', 'Docs. referência'); 
    !defined('NCS_ABIERTOPOR') && define('NCS_ABIERTOPOR', 'depois'); 
    !defined('NCS_AFECTAA') && define('NCS_AFECTAA', 'área afetada'); 
    !defined('NCS_CAUSAS') && define('NCS_CAUSAS', 'causas'); 
    !defined('NCS_ACCIONES') && define('NCS_ACCIONES', 'ações'); 
    !defined('NCS_PLAZO') && define('NCS_PLAZO', 'prazo'); 
    !defined('NCS_CIERRE_PARCIAL') && define('NCS_CIERRE_PARCIAL', 'O encerramento parcial'); 
    !defined('NCS_EFICACIA') && define('NCS_EFICACIA', 'eficácia'); 
    !defined('NCS_FECHACIERRE') && define('NCS_FECHACIERRE', 'Data de Encerramento'); 
    !defined('NCS_DESVIACION') && define('NCS_DESVIACION', 'desvio'); 
    !defined('NCS_VISIBLE') && define('NCS_VISIBLE', 'visível'); 
    !defined('NCS_LISTA') && define('NCS_LISTA', 'Lista de NC'); 
    !defined('NCS_GRAFICA') && define('NCS_GRAFICA', 'Gráfico de NC por área'); 
    !defined('NCS_REALIZAR_GRAFICA') && define('NCS_REALIZAR_GRAFICA', 'Realize gráfico'); 
    !defined('NCS_PORAREA') && define('NCS_PORAREA', 'NC por área'); 
    !defined('NCS_SELECCIONE_PARA_CAMBIAR') && define('NCS_SELECCIONE_PARA_CAMBIAR', 'Selecione para alterar'); 
    !defined('NCS_LASTID_HELP') && define('NCS_LASTID_HELP', 'Coloque o ID mais próximo que aparece ao lado do campo de entrada'); 
    !defined('NCS_CODIGO_HELP') && define('NCS_CODIGO_HELP', 'Este campo é código voluntário. Use o código que mais lhe convier.'); 
    !defined('NCS_AI_HELP') && define('NCS_AI_HELP', 'Se a não-conformidade não é derivado de qualquer auditoria,  não tem que colocar nada aqui.'); 
 
// ----------------------------------------------------------------------------------------------- Objetivos 
 
    !defined('OBJETIVOS_JOIN') && define('OBJETIVOS_JOIN', 'E Acompanhamento lista de alvos'); 
    !defined('OBJETIVOS_JOIN_THEAD') && define('OBJETIVOS_JOIN_THEAD', 'Clique em uma trilha-alvo para mostrar'); 
    !defined('OBJETIVOS_BORRAR_OBJETIVO') && define('OBJETIVOS_BORRAR_OBJETIVO', 'objetivo claro'); 
    !defined('OBJETIVOS_QUIERE_BORRAR') && define('OBJETIVOS_QUIERE_BORRAR', 'Clara e objetiva?'); 
    !defined('OBJETIVOS_OBJETIVO_BORRADO') && define('OBJETIVOS_OBJETIVO_BORRADO', 'Objetivo apagado!'); 
    !defined('OBJETIVOS_NOMBRE_OBJETIVO') && define('OBJETIVOS_NOMBRE_OBJETIVO', 'título'); 
    !defined('OBJETIVOS_ACCION') && define('OBJETIVOS_ACCION', 'ação'); 
    !defined('OBJETIVOS_TAREA') && define('OBJETIVOS_TAREA', 'tarefa'); 
    !defined('OBJETIVOS_ORIGEN') && define('OBJETIVOS_ORIGEN', 'origem'); 
    !defined('OBJETIVOS_DETECCION') && define('OBJETIVOS_DETECCION', 'detecção'); 
    !defined('OBJETIVOS_CAUSAS') && define('OBJETIVOS_CAUSAS', 'causas'); 
    !defined('OBJETIVOS_RECURSOS') && define('OBJETIVOS_RECURSOS', 'recursos'); 
    !defined('OBJETIVOS_FUENTE') && define('OBJETIVOS_FUENTE', 'fonte'); 
    !defined('OBJETIVOS_FRECUENCIA') && define('OBJETIVOS_FRECUENCIA', 'freqüência'); 
    !defined('OBJETIVOS_PLAZO') && define('OBJETIVOS_PLAZO', 'prazo'); 
    !defined('OBJETIVOS_EJECUTOR') && define('OBJETIVOS_EJECUTOR', 'executor'); 
    !defined('OBJETIVOS_PERSEGUIDOR') && define('OBJETIVOS_PERSEGUIDOR', 'perseguidor'); 
    !defined('OBJETIVOS_ANOTAR_TAREA') && define('OBJETIVOS_ANOTAR_TAREA', 'Anotar tarefa'); 
    !defined('OBJETIVOS_ANADIR_TAREA') && define('OBJETIVOS_ANADIR_TAREA', 'Adicionar tarefa'); 
    !defined('OBJETIVOS_TAREA_ANADIDA') && define('OBJETIVOS_TAREA_ANADIDA', 'Tarefa adicionada'); 
    !defined('OBJETIVOS_TAREA_MODIFICADA') && define('OBJETIVOS_TAREA_MODIFICADA', 'tarefa mod    ificado'); 
    !defined('OBJETIVOS_MODIFICAR_TAREA') && define('OBJETIVOS_MODIFICAR_TAREA', 'mod    ificar Tarefa'); 
    !defined('OBJETIVOS_FECHALIMITE_TAREA') && define('OBJETIVOS_FECHALIMITE_TAREA', 'prazo'); 
    !defined('OBJETIVOS_FECHATERMINACION_TAREA') && define('OBJETIVOS_FECHATERMINACION_TAREA', 'data de rescisão'); 
    !defined('OBJETIVOS_LISTA_TAREAS') && define('OBJETIVOS_LISTA_TAREAS', 'Lista de Tarefas'); 
    !defined('OBJETIVOS_THEAD') && define('OBJETIVOS_THEAD', 'Observe uma tarefa de monitoramento de um alvo'); 
    !defined('OBJETIVOS_LISTA') && define('OBJETIVOS_LISTA', 'Lista alvo'); 
    !defined('OBJETIVOS_FOLLOWUP') && define('OBJETIVOS_FOLLOWUP', 'Rastreamento meta'); 
    !defined('OBJETIVOS_FOLLOWUP_ADDED') && define('OBJETIVOS_FOLLOWUP_ADDED', 'acompanhar acrescentou'); 
    !defined('OBJETIVOS_EDITAR_OBJETIVO') && define('OBJETIVOS_EDITAR_OBJETIVO', 'Edite objetivo'); 
    !defined('OBJETIVOS_ADMINISTRAR_OBJETIVOS') && define('OBJETIVOS_ADMINISTRAR_OBJETIVOS', 'Gerenciando metas'); 
    !defined('OBJETIVOS_ANADIR_OBJETIVO') && define('OBJETIVOS_ANADIR_OBJETIVO', 'Adicionar um alvo'); 
    !defined('OBJETIVOS_CAMBIAR_OBJETIVO') && define('OBJETIVOS_CAMBIAR_OBJETIVO', 'Troca o alvo'); 
    !defined('OBJETIVOS_PRINTSCREEN') && define('OBJETIVOS_PRINTSCREEN', 'Ver o objetivo'); 
    !defined('OBJETIVOS_DETAILS') && define('OBJETIVOS_DETAILS', 'Detalhes da meta'); 
    !defined('OBJETIVO_ACTUALIZADO') && define('OBJETIVO_ACTUALIZADO', 'Objetivo atualizado!'); 
    !defined('OBJETIVOS_CODIGO_HELP') && define('OBJETIVOS_CODIGO_HELP', 'Lembre-se de cod    ificação alvos. Coloque imediatamente acima que aparece ao lado do campo de entrada. Se você colocar 220,  você deve colocar 320,  ou seja,  o objectivo 3,  2020!'); 
    !defined('OBJETIVOS_CAMBIAR_SEGUIMIENTO') && define('OBJETIVOS_CAMBIAR_SEGUIMIENTO', 'Mod    ificar uma tarefa'); 
    !defined('OBJETIVOS_ADVERTICE') && define('OBJETIVOS_ADVERTICE', 'Clique em uma tarefa de editar'); 
    !defined('SEGUIMIENTOS_CHANGE_DETAILS') && define('SEGUIMIENTOS_CHANGE_DETAILS', 'Tarefa para o efeito:'); 

//  -------------------------------------------------------------------------------------------------Indicadores 
 
    !defined('INDICADORES_GRAFICAS') && define('INDICADORES_GRAFICAS', 'Indicadores gráficos'); 
 
//  -------------------------------------------------------------------------------------------------Formación 
 
    !defined('FORMACION_ADMINISTRAR_FORMACION') && define('FORMACION_ADMINISTRAR_FORMACION', 'gestão de treinamento'); 
    !defined('FORMACION_ANADIR_CURSO') && define('FORMACION_ANADIR_CURSO', 'Adicione curso'); 
    !defined('FORMACION_CAPTION_ADD') && define('FORMACION_CAPTION_ADD', 'Adicione um curso de formação'); 
    !defined('FORMACION_CAPTION_MODIFY') && define('FORMACION_CAPTION_MODIFY', 'Mod    ificar um curso de formação'); 
    !defined('FORMACION_THEAD_MODIFY_ADVERTICE') && define('FORMACION_THEAD_MODIFY_ADVERTICE', 'Clique em um link para editar o curso'); 
    !defined('FORMACION_MODIFICAR_CURSO') && define('FORMACION_MODIFICAR_CURSO', 'mudar de rumo'); 
    !defined('FORMACION_BORRAR_CURSO') && define('FORMACION_BORRAR_CURSO', 'Curso clara'); 
    !defined('CURSO_QUIERE_BORRAR') && define('CURSO_QUIERE_BORRAR', 'Limpar curso?'); 
    !defined('FORMACION_CURSO_BORRADO') && define('FORMACION_CURSO_BORRADO', 'Curso apagado!'); 
    !defined('FORMACION_CURSO') && define('FORMACION_CURSO', 'curso'); 
    !defined('FORMACION_LISTACURSOS') && define('FORMACION_LISTACURSOS', 'Lista de cursos'); 
    !defined('FORMACION_LUGAR') && define('FORMACION_LUGAR', 'lugar'); 
    !defined('FORMACION_HORAS') && define('FORMACION_HORAS', 'horas'); 
    !defined('FORMACION_VALIDACION') && define('FORMACION_VALIDACION', 'validação'); 
    !defined('FORMACION_CURSOS_REALIZADOS') && define('FORMACION_CURSOS_REALIZADOS', 'cursos realizados'); 
    !defined('FORMACION_CURSOS_REALIZADOS_TRABAJADOR') && define('FORMACION_CURSOS_REALIZADOS_TRABAJADOR', 'Cursos realizados pelo trabalhador'); 
 
//  -------------------------------------------------------------------------------------------------Servicio 
 
    !defined('SERVICIO_TRABAJADOR') && define('SERVICIO_TRABAJADOR', 'empregado'); 
    !defined('SERVICIO_SERVICIO') && define('SERVICIO_SERVICIO', 'serviço'); 
    !defined('SERVICIO_ACTIVESTATUS') && define('SERVICIO_ACTIVESTATUS', 'ativo'); 
    !defined('SERVICIO_SERVICIOS_ACTIVOS') && define('SERVICIO_SERVICIOS_ACTIVOS', 'Serviços de ativos'); 
    !defined('SERVICIO_SERVICIOS_ADVERTICE') && define('SERVICIO_SERVICIOS_ADVERTICE', 'Clique em um serviço para exibir o número de inspeções realizadas'); 
    !defined('SERVICIO_MODIFY_THEAD') && define('SERVICIO_MODIFY_THEAD', 'Clique em um serviço para exibir detalhes'); 
    !defined('SERVICIO_INCIDENCIA') && define('SERVICIO_INCIDENCIA', 'incidência'); 
    !defined('SERVICIO_BORRAR_SERVICIO') && define('SERVICIO_BORRAR_SERVICIO', 'Serviço clara'); 
    !defined('SERVICIO_QUIERE_BORRAR') && define('SERVICIO_QUIERE_BORRAR', 'Limpar serviço / s?'); 
    !defined('SERVICIO_SERVICIO_BORRADO') && define('SERVICIO_SERVICIO_BORRADO', 'Remoção de serviço!'); 
    !defined('SERVICIO_ANADIR_SERVICIO') && define('SERVICIO_ANADIR_SERVICIO', 'Adicionar serviço'); 
    !defined('SERVICIO_ANADIDO') && define('SERVICIO_ANADIDO', 'Adicionado serviço!'); 
    !defined('SERVICIO_ACTUALIZADO') && define('SERVICIO_ACTUALIZADO', 'Serviço atualizado!'); 
    !defined('SERVICIO_ERROR_ANADIR') && define('SERVICIO_ERROR_ANADIR', 'Erro ao serviço & ntildir'); 
    !defined('SERVICIO_MODIFICAR_SERVICIO') && define('SERVICIO_MODIFICAR_SERVICIO', 'mod    ificar serviço'); 
    !defined('SERVICIO_ADMINISTRAR_SERVICIOS') && define('SERVICIO_ADMINISTRAR_SERVICIOS', 'Gerenciando Serviços'); 
    !defined('SERVICIO_LISTA_SERVICIOS') && define('SERVICIO_LISTA_SERVICIOS', 'Lista de Serviços'); 
    !defined('SERVICIO_AVISOS_GRAFICA') && define('SERVICIO_AVISOS_GRAFICA', 'Mensagem de evento Gráfico'); 
 
//  -------------------------------------------------------------------------------------------------Trabajadores 
 
    !defined('TRABAJADOR_TRABAJADOR') && define('TRABAJADOR_TRABAJADOR', 'empregado'); 
    !defined('TRABAJADOR_IMG') && define('TRABAJADOR_IMG', 'trabalhador img'); 
    !defined('TRABAJADOR_ANADIR_TRABAJADOR') && define('TRABAJADOR_ANADIR_TRABAJADOR', 'Adicionar trabalhador'); 
    !defined('TRABAJADOR_BORRAR_TRABAJADOR') && define('TRABAJADOR_BORRAR_TRABAJADOR', 'excluir trabalhador'); 
    !defined('TRABAJADOR_QUIERE_BORRAR') && define('TRABAJADOR_QUIERE_BORRAR', 'Excluir trabalhador / s?'); 
    !defined('TRABAJADOR_TRABAJADOR_BORRADO') && define('TRABAJADOR_TRABAJADOR_BORRADO', 'Trabalhador apagado!'); 
    !defined('TRABAJADOR_EDITAR_TRABAJADOR') && define('TRABAJADOR_EDITAR_TRABAJADOR', 'Edite trabalhador'); 
    !defined('TRABAJADOR_ADMINISTRAR_TRABAJADORES') && define('TRABAJADOR_ADMINISTRAR_TRABAJADORES', 'Gerenciando trabalhadores'); 
    !defined('TRABAJADOR_CAMBIAR_TRABAJADOR') && define('TRABAJADOR_CAMBIAR_TRABAJADOR', 'mod    ificar trabalhador'); 
    !defined('TRABAJADOR_ACTUALIZADO') && define('TRABAJADOR_ACTUALIZADO', 'Trabalhador atualizado!'); 
    !defined('TRABAJADOR_LISTA_TRABAJADORES') && define('TRABAJADOR_LISTA_TRABAJADORES', 'Lista de trabalhadores ativos'); 
    !defined('TRABAJADOR_THEAD_ADVERTICE') && define('TRABAJADOR_THEAD_ADVERTICE', 'Clique em um trabalhador para mostrar o número de cursos realizados'); 
    !defined('TRABAJADOR_THEAD_EDIT') && define('TRABAJADOR_THEAD_EDIT', 'Clique em um trabalhador para editar'); 
    !defined('TRABAJADOR_HA_HECHO') && define('TRABAJADOR_HA_HECHO', 'Os trabalhadores que tenham recebido treinamento'); 
    !defined('TRABAJADOR_ACTIVIDAD') && define('TRABAJADOR_ACTIVIDAD', 'atividade'); 

//  -------------------------------------------------------------------------------------------------Partes de trabajo 
    !defined('PARTES_HOJAS') && define('PARTES_HOJAS', 'Planilhas'); 
    !defined('PARTES_THEAD_ADVERTICE') && define('PARTES_THEAD_ADVERTICE', 'Clique em uma peça para mostrar detalhes'); 
    !defined('PARTE_DEL_TRABAJADOR') && define('PARTE_DEL_TRABAJADOR', 'Partido trabalhista'); 
    !defined('PARTE_DETALLES') && define('PARTE_DETALLES', 'Detalhes Parte'); 
    !defined('PARTES_ANADIR_PARTE') && define('PARTES_ANADIR_PARTE', 'Adicionar parte do trabalho'); 
    !defined('PARTES_EDITAR_PARTE') && define('PARTES_EDITAR_PARTE', 'Edite parte de trabalho'); 
    !defined('PARTES_ADMINISTRAR_PARTES') && define('PARTES_ADMINISTRAR_PARTES', 'Gerenciando peças de trabalho'); 
    !defined('PARTES_PRINT') && define('PARTES_PRINT', 'Parte de impressão de trabalhar'); 
    !defined('PARTES_CAMBIAR_PARTE') && define('PARTES_CAMBIAR_PARTE', 'mod    ificar parte'); 
    !defined('PARTES_BORRAR') && define('PARTES_BORRAR', 'Apagar parte / s'); 
    !defined('PARTES_QUIERE_BORRAR') && define('PARTES_QUIERE_BORRAR', 'Apagar parte / s?'); 
    !defined('PARTES_BUSCAR') && define('PARTES_BUSCAR', 'Parte de pesquisa / s'); 
    !defined('PARTES_PARTE_BORRADO') && define('PARTES_PARTE_BORRADO', 'Peça de Trabalho apagado!'); 
 
//  -------------------------------------------------------------------------------------------------Proveedores 
 
    !defined('PROVEEDORES_PROVEEDOR') && define('PROVEEDORES_PROVEEDOR', 'fornecedor'); 
    !defined('PROVEEDORES_SUMINISTRO') && define('PROVEEDORES_SUMINISTRO', 'fornecer'); 
    !defined('PROVEEDORES_ACTIVESTATUS') && define('PROVEEDORES_ACTIVESTATUS', 'ativo'); 
    !defined('PROVEEDORES_BORRAR_PROVEEDOR') && define('PROVEEDORES_BORRAR_PROVEEDOR', 'excluir fornecedor'); 
    !defined('PROVEEDORES_QUIERE_BORRAR') && define('PROVEEDORES_QUIERE_BORRAR', 'Excluir fornecedor / s?'); 
    !defined('PROVEEDORES_PROVEEDOR_BORRADO') && define('PROVEEDORES_PROVEEDOR_BORRADO', 'Fornecedor apagado!'); 
    !defined('PROVEEDORES_ANADIR_PROVEEDOR') && define('PROVEEDORES_ANADIR_PROVEEDOR', 'Adicionar fornecedor'); 
    !defined('PROVEEDORES_MODIFICAR_PROVEEDOR') && define('PROVEEDORES_MODIFICAR_PROVEEDOR', 'mod    ificar fornecedor'); 
    !defined('PROVEEDORES_ADMINISTRAR_PROVEEDORES') && define('PROVEEDORES_ADMINISTRAR_PROVEEDORES', 'Gerenciando fornecedores'); 
    !defined('PROVEEDORES_PROVEEDOR_APROBADO') && define('PROVEEDORES_PROVEEDOR_APROBADO', 'aprovado'); 
    !defined('PROVEEDORES_PROVEEDOR_ENPRUEBAS') && define('PROVEEDORES_PROVEEDOR_ENPRUEBAS', 'em testes'); 
    !defined('PROVEEDORES_CRITERIOS_EVALUACION') && define('PROVEEDORES_CRITERIOS_EVALUACION', 'Os critérios de avaliação'); 
    !defined('PROVEEDORES_PROVEEDOR_ACTUALIZADO') && define('PROVEEDORES_PROVEEDOR_ACTUALIZADO', 'Provedor atualizado!'); 
    !defined('PROVEEDORES_DATOS') && define('PROVEEDORES_DATOS', 'dados'); 
    !defined('PROVEEDORES_CIF') && define('PROVEEDORES_CIF', 'CIF'); 
    !defined('PROVEEDORES_LISTA') && define('PROVEEDORES_LISTA', 'Lista de fornecedores'); 
    !defined('PROVEEDORES_THEAD_ADVERTICE') && define('PROVEEDORES_THEAD_ADVERTICE', 'Clique em um fornecedor para ver detalhes'); 

    !defined('PROVEEDORES_INCIDENCIA') && define('PROVEEDORES_INCIDENCIA', 'incidência'); 
    !defined('PROVEEDORES_INCIDENCIAS') && define('PROVEEDORES_INCIDENCIAS', 'incidentes'); 
    !defined('PROVEEDORES_INCIDENCIAS_DELPROVEEDOR') && define('PROVEEDORES_INCIDENCIAS_DELPROVEEDOR', 'Fornecedor incidentes'); 
    !defined('PROVEEDORES_INCIDENCIAS_PORPROVEEDOR') && define('PROVEEDORES_INCIDENCIAS_PORPROVEEDOR', 'Incidentes por fornecedor'); 
    !defined('PROVEEDORES_ANOTAR_INCIDENCIA') && define('PROVEEDORES_ANOTAR_INCIDENCIA', 'incidência Anotar'); 
    !defined('PROVEEDORES_MODIFICAR_INCIDENCIA') && define('PROVEEDORES_MODIFICAR_INCIDENCIA', 'mod    ificar incidência'); 
    !defined('PROVEEDORES_BORRAR_INCIDENCIAS') && define('PROVEEDORES_BORRAR_INCIDENCIAS', 'incidências claras'); 
    !defined('INCIDENCIAS_QUIERE_BORRAR') && define('INCIDENCIAS_QUIERE_BORRAR', 'Clara incidência / s?'); 
    !defined('PROVEEDORES_INCIDENCIA_BORRADA') && define('PROVEEDORES_INCIDENCIA_BORRADA', 'Incidência apagado!'); 
    !defined('PROVEEDORES_DETALLES') && define('PROVEEDORES_DETALLES', 'Detalhes fornecedor'); 

    !defined('PROVEEDORES_INCIDENCIAS_PROVEEDOR_ADMIN') && define('PROVEEDORES_INCIDENCIAS_PROVEEDOR_ADMIN', 'Provedores de gerir as incidências'); 
    !defined('PROVEEDORES_ADMINISTRAR_CODIGOSINCIDENCIAS') && define('PROVEEDORES_ADMINISTRAR_CODIGOSINCIDENCIAS', 'Gerenciando códigos incidências'); 
    !defined('PROVEEDORES_BORRAR_CODIGOINCIDENCIA') && define('PROVEEDORES_BORRAR_CODIGOINCIDENCIA', 'Limpar incidentes códigos'); 
    !defined('CODIGOSINCIDENCIAS_QUIERE_BORRAR') && define('CODIGOSINCIDENCIAS_QUIERE_BORRAR', 'Códigos claros incidentes?'); 
    !defined('CODIGOSINCIDENCIAS_LASTID_HELP') && define('CODIGOSINCIDENCIAS_LASTID_HELP', 'Coloque o número do código imediatamente superior que aparece ao lado do campo de entrada,  por códigos de regras. O código que você vê é o último a ser inserido.'); 
 
    !defined('PROVEEDORES_NOMBRE_INCIDENCIA') && define('PROVEEDORES_NOMBRE_INCIDENCIA', 'Nome incidência'); 
    !defined('PROVEEDORES_ANADIR_CODIGOINCIDENCIA') && define('PROVEEDORES_ANADIR_CODIGOINCIDENCIA', 'Adicionar incidência código'); 
    !defined('PROVEEDORES_MODIFICAR_CODIGOINCIDENCIA') && define('PROVEEDORES_MODIFICAR_CODIGOINCIDENCIA', 'Mod    ificar código de evento'); 
    !defined('PROVEEDORES_CODIGO_ANADIDO') && define('PROVEEDORES_CODIGO_ANADIDO', 'Adicionado código!'); 
    !defined('PROVEEDORES_LISTA_CODIGOS') && define('PROVEEDORES_LISTA_CODIGOS', 'Codebook'); 
    !defined('PROVEEDORES_CODIGOS_ADVERTICE') && define('PROVEEDORES_CODIGOS_ADVERTICE', 'Clique em um código para alterar'); 
    !defined('PROVEEDORES_CODIGO_INCIDENCIA') && define('PROVEEDORES_CODIGO_INCIDENCIA', 'Incidência de código'); 
    !defined('PROVEEDORES_CODIGO_ACTUALIZADO') && define('PROVEEDORES_CODIGO_ACTUALIZADO', 'Código atualizado!'); 
    !defined('PROVEEDORES_CODIGOINCIDENCIA_BORRADO') && define('PROVEEDORES_CODIGOINCIDENCIA_BORRADO', 'Código de incidência apagado!'); 
    !defined('PROVEEDORES_INCIDENCIA_CODIGO') && define('PROVEEDORES_INCIDENCIA_CODIGO', 'código'); 
    !defined('PROVEEDORES_JOIN') && define('PROVEEDORES_JOIN', 'Lista de fornecedores e incidentes'); 

    !defined('PROVEEDORES_ADMINISTRAR_AREASSENSIBLES') && define('PROVEEDORES_ADMINISTRAR_AREASSENSIBLES', 'Gestão de áreas sensíveis'); 
    !defined('PROVEEDORES_ANADIR_AREASENSIBLE') && define('PROVEEDORES_ANADIR_AREASENSIBLE', 'Adicione área sensível'); 
    !defined('AREASENSIBLE_QUIERE_BORRAR') && define('AREASENSIBLE_QUIERE_BORRAR', 'Excluir área sensível?'); 
    !defined('PROVEEDORES_BORRAR_AREASSENSIBLES') && define('PROVEEDORES_BORRAR_AREASSENSIBLES', 'Excluir área sensível'); 
    !defined('PROVEEDORES_AREA_SENSIBLE_BORRADA') && define('PROVEEDORES_AREA_SENSIBLE_BORRADA', 'excluída área sensível!'); 
    !defined('PROVEEDORES_MODIFICAR_AREASENSIBLE') && define('PROVEEDORES_MODIFICAR_AREASENSIBLE', 'Mod    ificar área sensível'); 
    !defined('PROVEEDORES_AREASENSIBLE_ANADIDA') && define('PROVEEDORES_AREASENSIBLE_ANADIDA', 'Adicionado área sensível!'); 
    !defined('PROVEEDORES_LISTA_AREASSENSIBLES') && define('PROVEEDORES_LISTA_AREASSENSIBLES', 'Lista de áreas sensíveis'); 
    !defined('PROVEEDORES_AREASSENSIBLES_ADVERTICE') && define('PROVEEDORES_AREASSENSIBLES_ADVERTICE', 'Clique em uma área sensível para editar'); 
    !defined('PROVEEDORES_AREASENSIBLE') && define('PROVEEDORES_AREASENSIBLE', 'área sensível'); 
    !defined('PROVEEDORES_AREASENSIBLE_ACTUALIZADA') && define('PROVEEDORES_AREASENSIBLE_ACTUALIZADA', 'área sensível atualizado!'); 
 
//  ------------------------------------------------------------------------------------------------- Inspecciones

    !defined('INSPECCIONES_PRINTSCREEN') && define('INSPECCIONES_PRINTSCREEN', 'Inspeção detalhes'); 
    !defined('INSPECCIONES_BUSCAR') && define('INSPECCIONES_BUSCAR', 'inspeção de pesquisa'); 
    !defined('INSPECCIONES_LISTA') && define('INSPECCIONES_LISTA', 'Inspeções lista'); 
    !defined('INSPECCIONES_BORRAR_INSPECCION') && define('INSPECCIONES_BORRAR_INSPECCION', 'inspecção clara'); 
    !defined('INSPECCIONES_QUIERE_BORRAR') && define('INSPECCIONES_QUIERE_BORRAR', 'Limpar inspecção?'); 
    !defined('INSPECCIONES_INSPECCION_BORRADA') && define('INSPECCIONES_INSPECCION_BORRADA', 'Inspeção apagado!'); 
    !defined('INSPECCIONES_ANADIR_INSPECCION') && define('INSPECCIONES_ANADIR_INSPECCION', 'Adicionar inspeção'); 
    !defined('INSPECCIONES_CAMBIAR_INSPECCION') && define('INSPECCIONES_CAMBIAR_INSPECCION', 'editar Assista'); 
    !defined('INSPECCIONES_EDITAR_INSPECCION') && define('INSPECCIONES_EDITAR_INSPECCION', 'editar inspeção'); 
    !defined('INSPECCIONES_ADMINISTRAR_INSPECCIONES') && define('INSPECCIONES_ADMINISTRAR_INSPECCIONES', 'administrar inspeções'); 
    !defined('INSPECCIONES_THEAD_ADVERTICE') && define('INSPECCIONES_THEAD_ADVERTICE', 'Clique em uma data para ver detalhes'); 
    !defined('INSPECCIONES_ANADIR_CODIGOSINCIDENCIA') && define('INSPECCIONES_ANADIR_CODIGOSINCIDENCIA', 'Adicionar incidência código'); 
     !defined('INSPECCIONES_MODIFICAR_CODIGOSINCIDENCIA') && define('INSPECCIONES_MODIFICAR_CODIGOSINCIDENCIA', 'Mod    ificar código de evento'); 
     !defined('INSPECCIONES_ADMINISTRAR_CODIGOSINCIDENCIAS') && define('INSPECCIONES_ADMINISTRAR_CODIGOSINCIDENCIAS', 'Gerenciando códigos incidências'); 
     !defined('INSPECCIONES_CODIGOS_ADVERTICE') && define('INSPECCIONES_CODIGOS_ADVERTICE', 'Clique em um código para editar'); 
    !defined('INSPECCIONES_LISTA_CODIGOS') && define('INSPECCIONES_LISTA_CODIGOS', 'Incidências Lista de Código'); 

//  -----------------------------------------------------------------------------------------------Inspectores 

    !defined('INSPECCIONES_INSPECTOR') && define('INSPECCIONES_INSPECTOR', 'inspetor'); 
    !defined('INSPECTORES_LISTA') && define('INSPECTORES_LISTA', 'Lista de Inspetores'); 
    !defined('BORRAR_INSPECTOR') && define('BORRAR_INSPECTOR', '  inspetor clara'); 
    !defined('INSPECTORES_EDITAR_INSPECTOR') && define('INSPECTORES_EDITAR_INSPECTOR', '  Editar inspetor'); 
    !defined('INSPECTORES_ADMINISTRAR_INSPECTORES') && define('INSPECTORES_ADMINISTRAR_INSPECTORES', '  inspetores de gestão'); 
    !defined('INSPECTORES_ANADIR_INSPECTOR') && define('INSPECTORES_ANADIR_INSPECTOR', '  Adicionar inspetor'); 
    !defined('INSPECTORES_CAMBIAR_INSPECTOR') && define('INSPECTORES_CAMBIAR_INSPECTOR', '  alterar inspetor'); 
    !defined('INSPECTORES_QUIERE_BORRAR') && define('INSPECTORES_QUIERE_BORRAR', 'Inspetor claro?'); 
    !defined('INSPECTORES_INSPECTOR_BORRADO') && define('INSPECTORES_INSPECTOR_BORRADO', 'Inspector apagado!'); 
    !defined('INSPECTORES_INSPECTOR_ANADIDO') && define('INSPECTORES_INSPECTOR_ANADIDO', 'Inspector adicionado!'); 

//  Extintores 
 
    !defined('EXTINTORES_EXTINTOR') && define('EXTINTORES_EXTINTOR', 'extintor'); 
    !defined('EXTINTORES_EXTINTORES') && define('EXTINTORES_EXTINTORES', 'extintores'); 
    !defined('EXTINTORES_CLIENTE') && define('EXTINTORES_CLIENTE', 'cliente'); 
    !defined('EXTINTORES_EJECUCION') && define('EXTINTORES_EJECUCION', 'execução'); 
    !defined('EXTINTORES_LISTA') && define('EXTINTORES_LISTA', 'Lista de extintores'); 
    !defined('EXTINTORES_DETALLES') && define('EXTINTORES_DETALLES', 'Extintor de detalhes'); 
    !defined('EXTINTORES_NUMEXTINTORES') && define('EXTINTORES_NUMEXTINTORES', 'Número de extintores'); 
    !defined('EXTINTORES_PROXIMA_EJECUCION') && define('EXTINTORES_PROXIMA_EJECUCION', 'Execução próximo'); 
    !defined('EXTINTORES_FECHA_FABRICACION') && define('EXTINTORES_FECHA_FABRICACION', 'Data de fabricação'); 
    !defined('EXTINTORES_AGENTE_EXTINTOR') && define('EXTINTORES_AGENTE_EXTINTOR', 'extinção'); 
    !defined('EXTINTORES_NDESERIE') && define('EXTINTORES_NDESERIE', 'N ° de Série'); 
    !defined('EXTINTORES_BORRAR_EXTINTOR') && define('EXTINTORES_BORRAR_EXTINTOR', 'Extintor clara'); 
    !defined('EXTINTOR_QUIERE_BORRAR') && define('EXTINTOR_QUIERE_BORRAR', 'Limpar extintor / s?'); 
    !defined('EXTINTORES_EXTINTOR_BORRADO') && define('EXTINTORES_EXTINTOR_BORRADO', 'Extintor de exclusão'); 
    !defined('EXTINTORES_BUSCAR_EXTINTOR') && define('EXTINTORES_BUSCAR_EXTINTOR', 'Pesquisa Extintor'); 
    !defined('EXTINTORES_ANADIR_EXTINTOR') && define('EXTINTORES_ANADIR_EXTINTOR', 'Adicionar Extintor'); 
    !defined('EXTINTORES_EXTINTOR_ANADIDO') && define('EXTINTORES_EXTINTOR_ANADIDO', 'Extintor acrescentou'); 
    !defined('EXTINTORES_MODIFICAR_EXTINTOR') && define('EXTINTORES_MODIFICAR_EXTINTOR', 'mod    ificar Extintor'); 
    !defined('EXTINTORES_EDITAR_EXTINTOR') && define('EXTINTORES_EDITAR_EXTINTOR', 'Editar Extintor'); 
    !defined('EXTINTORES_ADMINISTRAR_EXTINTORES') && define('EXTINTORES_ADMINISTRAR_EXTINTORES', 'Extintores de gestão'); 
    !defined('EXTINTORES_THEAD_ADVERTICE') && define('EXTINTORES_THEAD_ADVERTICE', 'Clique sobre um extintor para editar'); 
    !defined('EXTINTORES_EXTINTOR_ACTUALIZADO') && define('EXTINTORES_EXTINTOR_ACTUALIZADO', 'Extintor atualizado!'); 
 
//  Equipos de medida 
 
    !defined('EQUIPOS_EQUIPO') && define('EQUIPOS_EQUIPO', 'equipe:'); 
    !defined('EQUIPOS_EQUIPOS') && define('EQUIPOS_EQUIPOS', 'metrologia'); 
    !defined('EQUIPOS_LISTA') && define('EQUIPOS_LISTA', 'Lista de equipamento de medição'); 
    !defined('EQUIPOS_MODELO') && define('EQUIPOS_MODELO', 'modelo:'); 
    !defined('EQUIPOS_FRECUENCALIB') && define('EQUIPOS_FRECUENCALIB', 'Frequência de calibração:'); 
    !defined('EQUIPOS_CRITERIO') && define('EQUIPOS_CRITERIO', 'Os critérios de admissão:'); 
    !defined('EQUIPOS_UBICACION') && define('EQUIPOS_UBICACION', 'Localização:'); 
    !defined('EQUIPOS_ANADIR') && define('EQUIPOS_ANADIR', 'Adicionar equipamento de medição'); 
    !defined('EQUIPOS_BORRAR') && define('EQUIPOS_BORRAR', 'Equipamentos de medição Excluir'); 
    !defined('EQUIPOS_QUIERE_BORRAR') && define('EQUIPOS_QUIERE_BORRAR', 'Equipe clara?'); 
    !defined('EQUIPO_BORRADO') && define('EQUIPO_BORRADO', 'Equipe apagado!'); 
    !defined('EQUIPOS_CAMBIAR') && define('EQUIPOS_CAMBIAR', 'mod    ificar Equipe'); 
    !defined('EQUIPOS_EDITAR') && define('EQUIPOS_EDITAR', 'editar equipe'); 
    !defined('EQUIPOS_ADMINISTRAR') && define('EQUIPOS_ADMINISTRAR', 'Gerenciar computadores'); 
    !defined('EQUIPOS_THEAD_ADVERTICE') && define('EQUIPOS_THEAD_ADVERTICE', 'Clique em uma equipe para ver detalhes'); 
    !defined('EQUIPOS_PRINT_DETAILS') && define('EQUIPOS_PRINT_DETAILS', 'Detalhes do equipamento'); 
    !defined('EQUIPOS_CALIBRACION') && define('EQUIPOS_CALIBRACION', 'calibragem'); 
 
//  Calibraciones 
 
    !defined('CALIBRACIONES_CALIBRACION') && define('CALIBRACIONES_CALIBRACION', 'calibragem'); 
    !defined('CALIBRACIONES_CALIBRACIONES') && define('CALIBRACIONES_CALIBRACIONES', 'calibrações'); 
    !defined('CALIBRACIONES_ENCALIBRACION') && define('CALIBRACIONES_ENCALIBRACION', 'na calibração'); 
    !defined('CALIBRACIONES_ENREPARACION') && define('CALIBRACIONES_ENREPARACION', 'na reparação'); 
    !defined('CALIBRACIONES_LISTA') && define('CALIBRACIONES_LISTA', 'Calibrações lista'); 
    !defined('CALIBRACIONES_DETALLES') && define('CALIBRACIONES_DETALLES', 'Detalhes da calibração'); 
    !defined('CALIBRACIONES_BORRAR') && define('CALIBRACIONES_BORRAR', 'Clear Calibration'); 
    !defined('CALIBRACION_QUIERE_BORRAR') && define('CALIBRACION_QUIERE_BORRAR', 'Clear Calibration / é?'); 
    !defined('CALIBRACION_BORRADA') && define('CALIBRACION_BORRADA', 'calibração eliminado'); 
    !defined('BUSCAR_CALIBRACION') && define('BUSCAR_CALIBRACION', 'Calibração de pesquisa'); 
    !defined('CALIBRACIONES_ANADIR') && define('CALIBRACIONES_ANADIR', 'Adicionar Calibração'); 
    !defined('CALIBRACION_ANADIDA') && define('CALIBRACION_ANADIDA', 'Calibração adicionado'); 
    !defined('CALIBRACIONES_MODIFICAR') && define('CALIBRACIONES_MODIFICAR', 'mod    ificar Calibração'); 
    !defined('CALIBRACIONES_EDITAR') && define('CALIBRACIONES_EDITAR', 'editar Calibração'); 
    !defined('CALIBRACIONES_ADMINISTRAR') && define('CALIBRACIONES_ADMINISTRAR', 'Calibrações gestão'); 
    !defined('CALIBRACIONES_THEAD_ADVERTICE') && define('CALIBRACIONES_THEAD_ADVERTICE', 'Clique em uma calibração para editar'); 
    !defined('CALIBRACION_ACTUALIZADA') && define('CALIBRACION_ACTUALIZADA', 'Calibração data!'); 

?>

