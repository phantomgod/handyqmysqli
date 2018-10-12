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
    !defined('PAGE_TITLE') && define('PAGE_TITLE', 'Handy-Q. qualidade line'); 
    !defined('PAGE_TITLE') && define('PAGE_TITLE', 'Handy-Q. Jakość line');
    !defined('HEADER_TITLE') && define('HEADER_TITLE', 'Systemy jakości');
    !defined('SITE_NAME') && define('SITE_NAME', 'Company, Inc');
    !defined('SLOGAN') && define('SLOGAN', 'Zero wad');
    !defined('HEADING') && define('HEADING', 'Nagłówek');
 
// General 
    !defined('APROBADO') && define('APROBADO', 'Zatwierdził:');
    !defined('DATABASE_USERNAME') && define('DATABASE_USERNAME', 'Nazwa użytkownika bazy danych:');
    !defined('DATABASE_PASSWORD') && define('DATABASE_PASSWORD', 'Hasło użytkownika do bazy danych:');
    !defined('DATABASE_HOST') && define('DATABASE_HOST', 'Nazwa serwera:');
    !defined('DATABASE_HOST_HELP') && define('DATABASE_HOST_HELP', 'Localhost * zwykle *. Pozostawić jak jest domyślnie');
    !defined('DATABASE_NAME') && define('DATABASE_NAME', 'Baza danych Nazwa:');
    !defined('DATABASE_NAME_HELP') && define('DATABASE_NAME_HELP', 'Nazwa bazy danych, która zostanie utworzona tabele, instalator:');
    !defined('DATABASE_INSTALL_ADVICE') && define('DATABASE_INSTALL_ADVICE', 'Wypełnij formularz, aby utworzyć tabele w bazie danych. Uwaga: Pamiętaj, aby wprowadzić tego samego połączenia w pliku .. / includes / mysql.php. Musisz usunąć ten plik insltalación po zakończeniu.');
    !defined('ANADIR') && define('ANADIR', 'Dodać');
    !defined('DOCUMENTOS') && define('DOCUMENTOS', 'Dokumenty');
    !defined('ADVERTICE') && define('ADVERTICE', 'Kliknij po szczegóły');
    !defined('FECHA') && define('FECHA', 'Data');
    !defined('ANO') && define('ANO', 'Rok');
    !defined('HORA') && define('HORA', 'Czas');
    !defined('RESULTADO') && define('RESULTADO', 'Wynikać');
    !defined('DOCUMENTACION') && define('DOCUMENTACION', 'Dokumentacja');
    !defined('BACK') && define('BACK', 'Z powrotem');
    !defined('ESTADO') && define('ESTADO', 'Stan');
    !defined('ACTUALIZAR') && define('ACTUALIZAR', 'Aktualizuj');
    !defined('ENVIAR') && define('ENVIAR', 'Wysłać');
    !defined('DELETE_ADVERTICE') && define('DELETE_ADVERTICE', 'Usuwanie u dołu na liście');
    !defined('IDIOMA') && define('IDIOMA', 'Wybierz język');
    !defined('VISIBLE') && define('VISIBLE', 'Widoczne?');
    !defined('CODIGO') && define('CODIGO', 'Kod');
    !defined('NOMBRE_INCIDENCIA') && define('NOMBRE_INCIDENCIA', 'Nazwa Zapadalność');
    !defined('SELECCIONE_EL_CODIGO') && define('SELECCIONE_EL_CODIGO', 'Wybierz kod. Domyślnie jest to 0-Kod powikłań. Jeśli inny kod pojawi, wybierz go z listy rozwijanej. Chociaż opis wydaje, zajmuje tylko wartość liczbową, aby zautomatyzować incydentu graficzny wskaźnik kontroli.');
    !defined('ANO') && define('ANO', 'Rok');
    !defined('ABRIR') && define('ABRIR', 'Otwarte');
    !defined('BUSCAR') && define('BUSCAR', 'Szukaj!');
    !defined('RESPONSABLE') && define('RESPONSABLE', 'Odpowiedzialny');
    !defined('TERMINACION') && define('TERMINACION', 'Wypowiedzenie');
    !defined('LIMITE') && define('LIMITE', 'Ograniczenie');
    !defined('OBSERVACIONES') && define('OBSERVACIONES', 'Obserwacje');
    !defined('BORRAR') && define('BORRAR', 'Usunąć');
    !defined('CLIENTE') && define('CLIENTE', 'Klient');
    !defined('INDICADOR') && define('INDICADOR', 'Wskaźnik');
    !defined('ACTIVO') && define('ACTIVO', 'Aktywny');
    !defined('INACTIVO') && define('INACTIVO', 'Nieaktywny');
    !defined('VOLVER') && define('VOLVER', 'Powrót');
    !defined('MODIFICAR') && define('MODIFICAR', 'Modyfikować');
    !defined('CIF') && define('CIF', 'CIF');
    !defined('DIRECCION') && define('DIRECCION', 'Adres');
    !defined('COMENTARIOS') && define('COMENTARIOS', 'Komentarze');
    !defined('ANO_MES_DIA') && define('ANO_MES_DIA', 'Rok-miesiąc-dzień');
    !defined('LISTA') && define('LISTA', 'Lista');
    !defined('PRESENTACION') && define('PRESENTACION', 'Handy-q jest oprogramowanie do zarządzania jakością Office Online');
    !defined('AYUDA') && define('AYUDA', 'Pomocy');
    !defined('ULTIMO_COMUNICADO') && define('ULTIMO_COMUNICADO', 'ostatnie stwierdzenie');
    !defined('IMPRIMIR') && define('IMPRIMIR', 'Wydrukuj rekord');
    !defined('IMPRIMIR_PAPEL') && define('IMPRIMIR_PAPEL', 'Drukowania na papierze');
    !defined('ERROR_ANADIR_REGISTRO') && define('ERROR_ANADIR_REGISTRO', 'Nie można dodać rekordu');
    !defined('CONTENIDO') && define('CONTENIDO', 'Zawartość');
    !defined('VEHICULOS') && define('VEHICULOS', 'Pojazdy');
    !defined('BACKUP') && define('BACKUP', 'Tworzenie kopii zapasowej bazy danych');
    !defined('ESCRITORIO') && define('ESCRITORIO', 'Wiadomości przychodzące ->');
    !defined('CUESTIONARIO_TALLER') && define('CUESTIONARIO_TALLER', 'Kwestionariusz Workshop');
    !defined('PRODUCCION') && define('PRODUCCION', 'Produkcja');
    !defined('CALIDAD') && define('CALIDAD', 'Jakość');
    !defined('ALMACEN') && define('ALMACEN', 'Filia');
    !defined('COMPRAS') && define('COMPRAS', 'Zakupy');
    !defined('FORMACION') && define('FORMACION', 'Szkolenie'); 
    !defined('TALLER') && define('TALLER', 'Warsztat');
    !defined('PAGINAR') && define('PAGINAR', 'Paginować');
    !defined('DESCRIPCION') && define('DESCRIPCION', 'Opis');
    !defined('ACCION') && define('ACCION', 'Akcja');
    !defined('PROCEDIMIENTO') && define('PROCEDIMIENTO', 'Procedura');
    !defined('LUGAR') && define('LUGAR', 'Miejsce');
    !defined('DESVIACION') && define('DESVIACION', 'Odchylenie');
    !defined('OPERATIVO') && define('OPERATIVO', 'Operacyjny');
    !defined('BAJA') && define('BAJA', 'Niski');
    !defined('EDITAR') && define('EDITAR', 'Edytuj');
    !defined('EXPLORAR_ARCHIVOS') && define('EXPLORAR_ARCHIVOS', 'Przeglądać pliki');
    !defined('IMAGEN_URL') && define('IMAGEN_URL', 'Link do obrazu');
    !defined('IMAGEN') && define('IMAGEN', 'Obraz');
    !defined('IMAGEN_URLHELP') && define('IMAGEN_URLHELP', 'Należy umieścić link do obrazka');
    !defined('INCIDENCIA') && define('INCIDENCIA', 'Zakres');
    !defined('RECUERDE_LOS_CODIGOS') && define('RECUERDE_LOS_CODIGOS', '0 Brak incydentów <br /> <br instrumentalny 1 nr 2 Brak produktu /> <br /> <br /> słaba 3 Leczenie 4 Brak środków ochronnych <br /> 5 Brak planowania pracy <br /> 6 Brak zabiegów <br /> certyfikaty 7 Brak ubrania, kosmetyki i higieny osobistej <br /> 8 Brak konserwacji i czyszczenia pojazdu');
    !defined('ACTIVIDAD') && define('ACTIVIDAD', 'Działalność');
    !defined('OBJETIVOS') && define('OBJETIVOS', 'Cele jakościowe.');
    !defined('CLIENTES') && define('CLIENTES', 'Klienci.');
    !defined('SATISFACCION') && define('SATISFACCION', 'Satysfakcja.');
    !defined('QUEJASCLIENTE') && define('QUEJASCLIENTE', 'Skarg.');
    !defined('INDICADORES_MEDICIONANALISISYMEJORA') && define('INDICADORES_MEDICIONANALISISYMEJORA', 'Wskaźniki MAM.');
    !defined('AUDITORIAS') && define('AUDITORIAS', 'Audytów.');
    !defined('NOCONFORMIDADESYMEJORAS') && define('NOCONFORMIDADESYMEJORAS', 'Niezgodności i doskonalenia.');
    !defined('POLITICADECALIDAD') && define('POLITICADECALIDAD', 'Polityka Jakości.');
    !defined('CAMBIOS') && define('CAMBIOS', 'Zmiany, które mogą mieć wpływ na system.');
    !defined('RECOMENDACIONESYCONCLUSIONES') && define('RECOMENDACIONESYCONCLUSIONES', 'Rekomendacje i wnioski.');
    !defined('CODIGO_INCIDENCIA') && define('CODIGO_INCIDENCIA', 'Kod Zapadalność:');
    !defined('INSPECCIONES_CODIGOSINCIDENCIAS_HELP') && define('INSPECCIONES_CODIGOSINCIDENCIAS_HELP', 'Zawsze umieścić kod numeryczny. Jeśli nie, to incydent graficzny inspekcji nie jest rysowany.');
    !defined('SELECCIONAR_Y_BORRAR') && define('SELECCIONAR_Y_BORRAR', 'Wybierz i usuń');
    !defined('DISTRIBUIDO') && define('DISTRIBUIDO', 'Dystrybucja');
    !defined('BORRAR_SELECCIONADOS') && define('BORRAR_SELECCIONADOS', 'Usuń zaznaczone');


//---------------------------------------------------------------------------------------------------------- Menu OFF
 
 
    !defined('MENU_ALT_ADMINISTRAR_DOCUMENTOS_OFF') && define('MENU_ALT_ADMINISTRAR_DOCUMENTOS_OFF', 'Musisz się zalogować, aby zarządzać dokumentami.');
    !defined('MENU_ALT_ANOTAR_DOCUMENTOS_OFF') && define('MENU_ALT_ANOTAR_DOCUMENTOS_OFF', 'Musisz się zalogować, aby napisać pracę.');
    !defined('MENU_ALT_BORRAR_DOCUMENTOS_OFF') && define('MENU_ALT_BORRAR_DOCUMENTOS_OFF', 'Musisz się zalogować, aby usunąć dokument.');
    !defined('MENU_ALT_MODIFICAR_CATEGORIAS_OFF') && define('MENU_ALT_MODIFICAR_CATEGORIAS_OFF', 'Musisz się zalogować, aby edytować kategorie.');
 
//---------------------------------------------------------------------------------------------------------- Menu  
 
 
    !defined('MENU_DOCUMENTOS') && define('MENU_DOCUMENTOS', 'Docs.');
    !defined('MENU_OTROS_DOCUMENTOS') && define('MENU_OTROS_DOCUMENTOS', 'Kolejna kontrola dokumentów.');

    !defined('MENU_BDDOCS') && define('MENU_BDDOCS', 'BD docs.');
    !defined('MENU_MODIFDOCS') && define('MENU_MODIFDOCS', 'Zmodyf. docs.');
    !defined('MENU_AUDITORIAS') && define('MENU_AUDITORIAS', 'Audyty');
    !defined('MENU_AINFORMES') && define('MENU_AINFORMES', 'AI_informes');
    !defined('MENU_AUDITORES') && define('MENU_AUDITORES', 'Audytorzy');
    !defined('MENU_INSPECCIONES') && define('MENU_INSPECCIONES', 'Inspekcje');
    !defined('MENU_INSPECTORES') && define('MENU_INSPECTORES', 'Inspektorzy');
    !defined('MENU_OBJETIVOS') && define('MENU_OBJETIVOS', 'Cele');
    !defined('MENU_PARTES') && define('MENU_PARTES', 'Arkusze');
    !defined('MENU_TRABAJADORES') && define('MENU_TRABAJADORES', 'Pracownik');
    !defined('MENU_SERVICIOS') && define('MENU_SERVICIOS', 'Usługi');
    !defined('MENU_PROVEEDORES') && define('MENU_PROVEEDORES', 'Dostawcy');
    !defined('MENU_FORMACION') && define('MENU_FORMACION', 'Kursy');
    !defined('MENU_AVISOS') && define('MENU_AVISOS', 'Zawiadomienia');
    !defined('MENU_ENCUESTAS') && define('MENU_ENCUESTAS', 'Ankiety'); 
    !defined('MENU_ALT_ADMINISTRAR_DOCUMENTOS') && define('MENU_ALT_ADMINISTRAR_DOCUMENTOS', 'Dodaj dokument szybko (do tego trzeba wiedzieć, pamięć kodu kategorii, do której należy, lub modyfikuje istniejący dokument za błędy kiedy strzelił');
    !defined('MENU_ALT_MAPA_DOCUMENTOS') && define('MENU_ALT_MAPA_DOCUMENTOS', 'Plan dokumentu: Pokazuje nasze kategorie dokumentalne drzewo dokumentów');
    !defined('MENU_ALT_ANOTAR_DOCUMENTOS') && define('MENU_ALT_ANOTAR_DOCUMENTOS', 'Opisywanie dokumentu: poprawny sposób napisać pracę. Ten wysyła żądanie do Administratora o zatwierdzenie dokumentu. Od tego czasu pojawia się w ogólnej listy');
    !defined('MENU_ALT_ANOTAR_DOCMANAGER') && define('MENU_ALT_ANOTAR_DOCMANAGER', 'Włóż dokument bezpośrednio w bazie danych, do często używanych dokumentów.');
    !defined('MENU_ALT_EDITAR_BDDOC') && define('MENU_ALT_EDITAR_BDDOC', 'Edytuj dokumenty są wstawiane bezpośrednio do bazy danych.');
    !defined('MENU_ALT_APROBAR_DOCUMENTOS') && define('MENU_ALT_APROBAR_DOCUMENTOS', 'Zatwierdza dokument zauważono wcześniej.');
    !defined('MENU_ALT_SUBIR_DOCUMENTOS') && define('MENU_ALT_SUBIR_DOCUMENTOS', 'Prześlij dokumenty: dodaj');
    !defined('MENU_ALT_BUSCAR_DOCUMENTOS') && define('MENU_ALT_BUSCAR_DOCUMENTOS', 'Znajdź dokument');
    !defined('MENU_ALT_BORRAR_DOCUMENTOS') && define('MENU_ALT_BORRAR_DOCUMENTOS', 'Usuwanie dokumentu');
    !defined('MENU_ALT_LISTA_DOCUMENTOS') && define('MENU_ALT_LISTA_DOCUMENTOS', 'Ogólny wykaz dokumentów: list posortowane wg Dokumentu');
    !defined('MENU_ALT_MODIFICAR_CATEGORIAS') && define('MENU_ALT_MODIFICAR_CATEGORIAS', 'Zarządza drzewa kategorii dokumentów: dodawanie, modyfikowanie, usuwanie.');
    !defined('MENU_ALT_MODIFDOC') && define('MENU_ALT_MODIFDOC', 'Zarządzaj dokumentów zmian: opisywanie lub modyfikacji zmian dokonanych w poszczególnych dokumentów');
    !defined('MENU_ALT_BORRAR_MODIFDOC') && define('MENU_ALT_BORRAR_MODIFDOC', 'Wyraźne zmiany wprowadzone do poszczególnych dokumentów');
    !defined('MENU_ALT_DOC_PRINTSCREEN') && define('MENU_ALT_DOC_PRINTSCREEN', 'Przykładowe dokumenty bezpośrednio w bazie wkładek, te o wiele użytku.'); 
    !defined('MENU_ALT_ADMINISTRAR_AUDITORIAS') && define('MENU_ALT_ADMINISTRAR_AUDITORIAS', 'Audyty zarządzania');
    !defined('MENU_ALT_ADMINISTRAR_AINFORMES') && define('MENU_ALT_ADMINISTRAR_AINFORMES', 'Zarządzaj sprawozdań z kontroli');
    !defined('MENU_ALT_IMPRIMIR_AUDITORIAS') && define('MENU_ALT_IMPRIMIR_AUDITORIAS', 'Wydrukuj Audit');
    !defined('MENU_ALT_IMPRIMIR_AINFORMES') && define('MENU_ALT_IMPRIMIR_AINFORMES', 'Wydrukuj raport audytu');
    !defined('MENU_ALT_BORRAR_AUDITORIAS') && define('MENU_ALT_BORRAR_AUDITORIAS', 'Jasne, audyty');
    !defined('MENU_ALT_BORRAR_AINFORMES') && define('MENU_ALT_BORRAR_AINFORMES', 'Jasne, sprawozdanie z audytu');
    !defined('MENU_ALT_BUSCAR_AUDITORIAS') && define('MENU_ALT_BUSCAR_AUDITORIAS', 'Audyty Szukaj');
    !defined('MENU_ALT_BUSCAR_AINFORMES') && define('MENU_ALT_BUSCAR_AINFORMES', 'Raport z audytu Szukaj');
    !defined('MENU_ALT_LISTA_AUDITORIAS') && define('MENU_ALT_LISTA_AUDITORIAS', 'Lista Audyty');
    !defined('MENU_ALT_LISTA_AINFORMES') && define('MENU_ALT_LISTA_AINFORMES', 'Wykaz raportów audytorskich'); 
    !defined('MENU_ALT_ADMINISTRAR_AUDITOR') && define('MENU_ALT_ADMINISTRAR_AUDITOR', 'Zarządzanie rewidenta');
    !defined('MENU_ALT_IMPRIMIR_AUDITOR') && define('MENU_ALT_IMPRIMIR_AUDITOR', 'Audytor Drukuj');
    !defined('MENU_ALT_BORRAR_AUDITOR') && define('MENU_ALT_BORRAR_AUDITOR', 'Jasne rewident'); 
    !defined('MENU_ALT_ADMINISTRAR_INSPECCION') && define('MENU_ALT_ADMINISTRAR_INSPECCION', 'Podawać inspekcje');
    !defined('MENU_ALT_ADMINISTRAR_INCIDENCIASINSPECCION') && define('MENU_ALT_ADMINISTRAR_INCIDENCIASINSPECCION', 'Zarządzanie częstość inspekcji');
    !defined('MENU_ALT_IMPRIMIR_INSPECCION') && define('MENU_ALT_IMPRIMIR_INSPECCION', 'Wydrukuj inspekcję');
    !defined('MENU_ALT_BORRAR_INSPECCION') && define('MENU_ALT_BORRAR_INSPECCION', 'Jasne inspektorat');
    !defined('MENU_ALT_BUSCAR_INSPECCION') && define('MENU_ALT_BUSCAR_INSPECCION', 'Inspekcja Szukaj');
    !defined('MENU_ALT_JOIN_INSPECCIONES') && define('MENU_ALT_JOIN_INSPECCIONES', 'Liczba kontroli przez służby'); 
    !defined('MENU_ALT_ADMINISTRAR_INSPECTOR') && define('MENU_ALT_ADMINISTRAR_INSPECTOR', 'Inspektorzy zarządzające');
    !defined('MENU_ALT_IMPRIMIR_INSPECTOR') && define('MENU_ALT_IMPRIMIR_INSPECTOR', 'Inspektorzy Drukuj');
    !defined('MENU_ALT_BORRAR_INSPECTOR') && define('MENU_ALT_BORRAR_INSPECTOR', 'Wyczyść inspektorzy'); 
    !defined('MENU_ALT_ADMINISTRAR_OBJETIVOS') && define('MENU_ALT_ADMINISTRAR_OBJETIVOS', 'Podawać cele: Dodaj & modyfikować');
    !defined('MENU_ALT_IMPRIMIR_OBJETIVOS') && define('MENU_ALT_IMPRIMIR_OBJETIVOS', 'Wyświetla szczegóły docelowych');
    !defined('MENU_ALT_BORRAR_OBJETIVOS') && define('MENU_ALT_BORRAR_OBJETIVOS', 'Jasne cele');
    !defined('MENU_ALT_BUSCAR_OBJETIVOS') && define('MENU_ALT_BUSCAR_OBJETIVOS', 'Cele wyszukiwania');
    !defined('MENU_ALT_LISTA_OBJETIVOS') && define('MENU_ALT_LISTA_OBJETIVOS', 'Lista docelowa');
    !defined('MENU_ALT_ADDTASK_OBJETIVOS') && define('MENU_ALT_ADDTASK_OBJETIVOS', 'Dodaj zadanie do celu');
    !defined('MENU_ALT_JOIN_OBJETIVOS') && define('MENU_ALT_JOIN_OBJETIVOS', 'Przykładowe zadania odpowiadające każdego celu'); 
    !defined('MENU_ALT_ADMINISTRAR_PARTES') && define('MENU_ALT_ADMINISTRAR_PARTES', 'Zarządzanie części pracy: Dodaj & zmienić');
    !defined('MENU_ALT_IMPRIMIR_PARTES') && define('MENU_ALT_IMPRIMIR_PARTES', 'Wyświetla szczegółowe informacje na temat strony');
    !defined('MENU_ALT_BORRAR_PARTES') && define('MENU_ALT_BORRAR_PARTES', 'Zdjąć części');
    !defined('MENU_ALT_BUSCAR_PARTES') && define('MENU_ALT_BUSCAR_PARTES', 'Szukaj strony'); 
    !defined('MENU_ALT_ADMINISTRAR_EXTINTORES') && define('MENU_ALT_ADMINISTRAR_EXTINTORES', 'Zarządzanie gaśnic: Dodaj i edytuj');
    !defined('MENU_ALT_IMPRIMIR_EXTINTORES') && define('MENU_ALT_IMPRIMIR_EXTINTORES', 'Wyświetla szczegółowe informacje na gaśnicy');
    !defined('MENU_ALT_BORRAR_EXTINTORES') && define('MENU_ALT_BORRAR_EXTINTORES', 'Wyczyść gaśnice');
    !defined('MENU_ALT_BUSCAR_EXTINTORES') && define('MENU_ALT_BUSCAR_EXTINTORES', 'Szukaj gaśnica');
    !defined('MENU_ALT_LISTA_EXTINTORES') && define('MENU_ALT_LISTA_EXTINTORES', 'Lista gaśnice'); 
    !defined('MENU_ALT_ADMINISTRAR_TRABAJADORES') && define('MENU_ALT_ADMINISTRAR_TRABAJADORES', 'Zarządzanie pracowników: Dodaj i edytuj');
    !defined('MENU_ALT_BORRAR_TRABAJADORES') && define('MENU_ALT_BORRAR_TRABAJADORES', 'Wyczyść pracownicy'); 
    !defined('MENU_ALT_ADMINISTRAR_SERVICIOS') && define('MENU_ALT_ADMINISTRAR_SERVICIOS', 'Zarządzanie usługami: Dodaj i zmienić');
    !defined('MENU_ALT_BORRAR_SERVICIOS') && define('MENU_ALT_BORRAR_SERVICIOS', 'Usuwanie usługi');
    !defined('MENU_ALT_CONTROLAVISOS') && define('MENU_ALT_CONTROLAVISOS', 'Kontrolowanie przypomnienia');
    !defined('MENU_ALT_GRAFICAVISOS') && define('MENU_ALT_GRAFICAVISOS', 'Reklamy graficzne na miesiąc'); 
    !defined('MENU_ALT_ADMINISTRAR_FORMACION') && define('MENU_ALT_ADMINISTRAR_FORMACION', 'Zarządzanie szkolenia: Dodaj i edytuj');
    !defined('MENU_ALT_BORRAR_FORMACION') && define('MENU_ALT_BORRAR_FORMACION', 'Jasne, szkolenia');
    !defined('MENU_ALT_LISTA_FORMACION') && define('MENU_ALT_LISTA_FORMACION', 'Lista przedmiotów');
    !defined('MENU_ALT_JOIN_FORMACION') && define('MENU_ALT_JOIN_FORMACION', 'Kursy na pracownika'); 
    !defined('MENU_ALT_ADMINISTRAR_EQUIPOS') && define('MENU_ALT_ADMINISTRAR_EQUIPOS', 'Jako zarządzający zespołami: Dodaj i edytuj');
    !defined('MENU_ALT_IMPRIMIR_EQUIPOS') && define('MENU_ALT_IMPRIMIR_EQUIPOS', 'Wyświetla szczegółowe informacje na temat wyposażenia pomiarowego');
    !defined('MENU_ALT_BORRAR_EQUIPOS') && define('MENU_ALT_BORRAR_EQUIPOS', 'Sprzęt pomiarowy Usuń');
    !defined('MENU_ALT_BUSCAR_EQUIPOS') && define('MENU_ALT_BUSCAR_EQUIPOS', 'Urządzenia pomiarowe Szukaj');
    !defined('MENU_ALT_LISTA_EQUIPOS') && define('MENU_ALT_LISTA_EQUIPOS', 'Lista wyposażenia pomiarowego'); 
    !defined('MENU_ALT_ADMINISTRAR_CALIBRACIONES') && define('MENU_ALT_ADMINISTRAR_CALIBRACIONES', 'Zarządzanie kalibracje: Dodaj i edytuj');
    !defined('MENU_ALT_IMPRIMIR_CALIBRACIONES') && define('MENU_ALT_IMPRIMIR_CALIBRACIONES', 'Wyświetla dane kalibracyjne');
    !defined('MENU_ALT_BORRAR_CALIBRACIONES') && define('MENU_ALT_BORRAR_CALIBRACIONES', 'Wyczyść kalibracje');
    !defined('MENU_ALT_BUSCAR_CALIBRACIONES') && define('MENU_ALT_BUSCAR_CALIBRACIONES', 'Kalibracja Szukaj');
    !defined('MENU_ALT_LISTA_CALIBRACIONES') && define('MENU_ALT_LISTA_CALIBRACIONES', 'Lista kalibracje');
    !defined('MENU_ALT_JOIN_CALIBRACIONES') && define('MENU_ALT_JOIN_CALIBRACIONES', 'Pokaż kalibracje na zespół');
    !defined('MENU_REVSISTEMA') && define('MENU_REVSISTEMA', 'System oceny');
    !defined('MENU_IMPRIMIR_REVSISTEMA') && define('MENU_IMPRIMIR_REVSISTEMA', 'Wydrukuj recenzję systemu'); 
    !defined('MENU_NCS') && define('MENU_NCS', 'Niezgodności');

//------------------------------------------------------- Revisión del sistema
 
 
 
    !defined('REVSISTEMA_PRINT_DETAILS') && define('REVSISTEMA_PRINT_DETAILS', 'Przegląd dnia'); 
    !defined('REVSISTEMA_INDICADORES') && define('REVSISTEMA_INDICADORES', 'Wskaźniki jakości'); 
    !defined('REVSISTEMA_LISTA_PRINTSCREEN') && define('REVSISTEMA_LISTA_PRINTSCREEN', 'Lista poprawek');
    !defined('REVSISTEMA_NUM') && define('REVSISTEMA_NUM', 'Korekta nie');
    !defined('REVSISTEMA_ADVERTICE') && define('REVSISTEMA_ADVERTICE', 'Kliknij na przeglądzie do wydrukowania');

// Cuestionarios al SGC // Cuestionarios al SGC 
 
    !defined('CUESTIONARIO_TRATAMIENTOS') && define('CUESTIONARIO_TRATAMIENTOS', 'Usługa Kwestionariusz');
    !defined('CUESTIONARIO_CALIDAD') && define('CUESTIONARIO_CALIDAD', 'Kwestionariusz dep. jakość');
    !defined('CUESTIONARIO_ALMACEN') && define('CUESTIONARIO_ALMACEN', 'Kwestionariusz do przechowywania');
    !defined('CUESTIONARIO_COMPRAS') && define('CUESTIONARIO_COMPRAS', 'Kwestionariusz kupić');
    !defined('CUESTIONARIO_FORMACION') && define('CUESTIONARIO_FORMACION', 'Kwestionariusz do szkoleń');
    !defined('CUESTIONARIO_DOCUMENTACION') && define('CUESTIONARIO_DOCUMENTACION', 'Kwestionariusz dla dokumentacji');
    !defined('CUESTIONARIO_LEGIONELLA') && define('CUESTIONARIO_LEGIONELLA', 'Kwestionariusz legionelli');
 
 
 
 
// Indicadores 
 
 
 
    !defined('INDICADORES_INDICADORES') && define('INDICADORES_INDICADORES', 'Wskaźniki');
    !defined('INDICADORES_NCSPORAREA') && define('INDICADORES_NCSPORAREA', 'Liczba niezgodności na powierzchni');
    !defined('INDICADORES_DESVIACIONCIERRESNCS') && define('INDICADORES_DESVIACIONCIERRESNCS', 'Odchylenia zamykania niezgodności');
    !defined('INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR') && define('INDICADORES_TOTALHORASFORMACIONPORTRABAJADOR', 'Całkowita liczba godzin szkoleniowych na jednego pracownika');
    !defined('INDICADORES_GRAFICACONTROLAVISOS') && define('INDICADORES_GRAFICACONTROLAVISOS', 'Odsetek ogłoszeń na miesiąc');
    !defined('INDICADORES_GRAFICAINCIDENCIASINSPECCIONES') && define('INDICADORES_GRAFICAINCIDENCIASINSPECCIONES', 'Incydenty w inspekcji serwisowych');
    !defined('INDICADORES_NOCONFORMIDADESPORAREA') && define('INDICADORES_NOCONFORMIDADESPORAREA', 'Niezgodności według obszaru'); 
    !defined('INDICADORES_INCIDENCIASDEINSPECCION') && define('INDICADORES_INCIDENCIASDEINSPECCION', 'Incydenty w inspekcji serwisowych');
    !defined('INDICADORES_DERECURSOS') && define('INDICADORES_DERECURSOS', 'Wskaźniki REC');
    !defined('INDICADORES_FORMACIONANUAL') && define('INDICADORES_FORMACIONANUAL', 'Roczne godzin szkoleniowych');
    !defined('INDICADORES_INCIDENCIASDEALMACEN') && define('INDICADORES_INCIDENCIASDEALMACEN', 'Incydenty ręki');
    !defined('INDICADORES_DEPRODUCCION') && define('INDICADORES_DEPRODUCCION', 'Wskaźniki OP (operacyjny)');
    !defined('INDICADORES_INCIDENCIASDEPROVEEDOR') && define('INDICADORES_INCIDENCIASDEPROVEEDOR', 'Dostawca Incydenty');


 
 
// Avisos 
 
 
 
    !defined('AVISOS_AVISOS') && define('AVISOS_AVISOS', 'Zawiadomienia');
    !defined('AVISOS_AVISO') && define('AVISOS_AVISO', 'Uwaga!');
    !defined('AVISOS_DETALLES') && define('AVISOS_DETALLES', 'Szczegóły ogłoszenia');
    !defined('AVISOS_COMUNICADOPOR') && define('AVISOS_COMUNICADOPOR', 'Przekazane przez');
    !defined('AVISOS_LISTAVISOS') && define('AVISOS_LISTAVISOS', 'Lista powiadomienie pulpit');
    !defined('AVISOS_PONERAVISO') && define('AVISOS_PONERAVISO', 'Zamieścić ogłoszenie pulpit');
    !defined('AVISOS_THEAD_ADVERTICE') && define('AVISOS_THEAD_ADVERTICE', 'Kliknij na link, aby zobaczyć szczegóły ogłoszenia');
    !defined('AVISOS_AVISO_BORRADO') && define('AVISOS_AVISO_BORRADO', 'Wskazówka usunięte!');
    !defined('AVISOS_ADMIN') && define('AVISOS_ADMIN', 'Zarządzanie ogłoszenia pulpitu');
    !defined('AVISOS_DELETE') && define('AVISOS_DELETE', 'Usuń reklamy');
    !defined('AVISOS_PONER_AVISO') && define('AVISOS_PONER_AVISO', 'Dodaj ogłoszenie');
 
 
 
 
// Documentos 
 
 
 
    !defined('DOCUMENTOS_MAPA') && define('DOCUMENTOS_MAPA', 'Plan dokumentu');
    !defined('DOCUMENTOS_DOCUMENTO') && define('DOCUMENTOS_DOCUMENTO', 'Dokument');
    !defined('APROBAR_DOCUMENTOS') && define('APROBAR_DOCUMENTOS', 'Zatwierdzania dokumentów');
    !defined('BORRAR_DOCUMENTO') && define('BORRAR_DOCUMENTO', 'Usuń dokument');
    !defined('EDITAR_BORRAR_DOCUMENTO') && define('EDITAR_BORRAR_DOCUMENTO', 'Edytować i usuwać dokumenty');
    !defined('SUBIR_DOCUMENTOS') && define('SUBIR_DOCUMENTOS', 'Przekazywanie dokumentów');
    !defined('BUSCAR_DOCUMENTOS') && define('BUSCAR_DOCUMENTOS', 'Wyszukiwanie dokumentów');
    !defined('DOCUMENTO_BORRADO') && define('DOCUMENTO_BORRADO', 'Dokument usunięte!');
    !defined('NOMBRE_DOCUMENTO') && define('NOMBRE_DOCUMENTO', 'Tytuł');
    !defined('DOCUMENTO_AUTOR') && define('DOCUMENTO_AUTOR', 'Autor');
    !defined('DOCUMENTOS_ANADIR_DOCUMENTO') && define('DOCUMENTOS_ANADIR_DOCUMENTO', 'Dodaj dokument');
    !defined('DOCUMENTOS_ADMINISTRAR_DOCUMENTOS') && define('DOCUMENTOS_ADMINISTRAR_DOCUMENTOS', 'Zarządzanie dokumentami');
    !defined('DOCUMENTOS_CAMBIAR_DOCUMENTO') && define('DOCUMENTOS_CAMBIAR_DOCUMENTO', 'Edytuj dokument');
    !defined('DOCUMENTOS_MODIFICADOS') && define('DOCUMENTOS_MODIFICADOS', 'Dokumenty zmodyfikowane');
    !defined('DOCUMENTOS_IDSOLICITUD') && define('DOCUMENTOS_IDSOLICITUD', 'Wniosek id');
    !defined('DOCUMENTOS_SECCIONID') && define('DOCUMENTOS_SECCIONID', 'id sekcji');
    !defined('DOCUMENTOS_THEAD_ADVERTICE') && define('DOCUMENTOS_THEAD_ADVERTICE', 'Kliknij na link, aby zobaczyć szczegóły');
    !defined('DOCUMENTOS_THEAD_ADVERTICE_JOIN') && define('DOCUMENTOS_THEAD_ADVERTICE_JOIN', 'Kliknij na dokument, aby pokazać zmiany');
    !defined('DOCUMENTOS_PRINT_DETAILS') && define('DOCUMENTOS_PRINT_DETAILS', 'Szczegóły dokumentu');
    !defined('DOCUMENTOS_MODIFDOC_ADMIN') && define('DOCUMENTOS_MODIFDOC_ADMIN', 'Zmiany w dokumentach');
    !defined('EDITAR_BORRAR_MODIFDOC') && define('EDITAR_BORRAR_MODIFDOC', 'Edycja i usuwanie zmian w locie');
    !defined('DOCUMENTOS_ANOTAR_MODIFICACION') && define('DOCUMENTOS_ANOTAR_MODIFICACION', 'Uwaga zmiany');
    !defined('DOCUMENTOS_EDITAR_MODIFICACION') && define('DOCUMENTOS_EDITAR_MODIFICACION', 'Edit poprawka');
    !defined('DOCUMENTOS_NUMEROREVISION') && define('DOCUMENTOS_NUMEROREVISION', 'Korekta nie');
    !defined('DOCUMENTOS_MODIFICACION') && define('DOCUMENTOS_MODIFICACION', 'Modyfikacja');
    !defined('DOCUMENTOS_MODIFICACIONES') && define('DOCUMENTOS_MODIFICACIONES', 'Zmiany w dokumencie:');
    !defined('DOCUMENTOS_CAPAPART') && define('DOCUMENTOS_CAPAPART', 'Rozdział przekroju');
    !defined('DOCUMENTOS_LISTA') && define('DOCUMENTOS_LISTA', 'Wykaz dokumentów');
    !defined('DOCUMENTOS_FECHAMODIFICACION') && define('DOCUMENTOS_FECHAMODIFICACION', 'Data modyfikacji');
    !defined('DOCUMENTOS_MODIFICACIONES_DETALLES') && define('DOCUMENTOS_MODIFICACIONES_DETALLES', 'Szczegóły zmian');
    !defined('DOCUMENTO_ACTUALIZADO') && define('DOCUMENTO_ACTUALIZADO', 'Poprawione!');
    !defined('DOCUMENTOS_JOIN') && define('DOCUMENTOS_JOIN', 'Zmiany dla dokumentu');
    !defined('DOCUMENTOS_LISTA_MODIFICACIONES') && define('DOCUMENTOS_LISTA_MODIFICACIONES', 'Lista zmian');
    !defined('DOCUMENTOS_BORRAR_MODIFICACION') && define('DOCUMENTOS_BORRAR_MODIFICACION', 'Jasne poprawka');
    !defined('DOCUMENTOS_MODIFICACION_QUIERE_BORRAR') && define('DOCUMENTOS_MODIFICACION_QUIERE_BORRAR', 'Chcesz wyczyścić tę zmianę?');
    !defined('DOCUMENTOS_QUIERE_BORRAR') && define('DOCUMENTOS_QUIERE_BORRAR', 'Chcesz usunąć ten dokument?');
    !defined('DOCUMENTOS_MODIFDOC_DELETED') && define('DOCUMENTOS_MODIFDOC_DELETED', 'Modyfikacja usunięte!');
    !defined('MODIFICACION_ANOTADA') && define('MODIFICACION_ANOTADA', 'Modyfikacja uwagami!');
    !defined('DOCUMENTOS_ULTIMAS_MODIFICACIONES') && define('DOCUMENTOS_ULTIMAS_MODIFICACIONES', 'Ostatnie zmiany');
    !defined('DOCUMENTOS_ULTIMA_REVISION') && define('DOCUMENTOS_ULTIMA_REVISION', 'Kliknij na przycisk, aby sprawdzić w najnowszej wersji dokumentu opatrzonego komentarzem. Dokumenty nie wymienione wschodzących, lub nie zostały zmienione lub nie rozpatrywana, nie podlegają zmianie.');
    !defined('DOCUMENTOS_IDSOLICITUD_HELP') && define('DOCUMENTOS_IDSOLICITUD_HELP', 'Wpisz identyfikator, który pojawia się bezpośrednio nad obok polu'); 
    !defined('DOCUMENTOS_LINK_HELP') && define('DOCUMENTOS_LINK_HELP', 'Wpisz adres folderu przesłanego dokumentu. Na przykład: / uploads / jakość / documento.pdf'); 
    !defined('DOCUMENTOS_CLAVE1_HELP') && define('DOCUMENTOS_CLAVE1_HELP', 'Put który rozpowszechniany dokument.');
 
 
 
// Documentos de la BD : docmanager 
 
 
    !defined('DOCMANAGER_PRINT') && define('DOCMANAGER_PRINT', 'Zobacz dokumenty BD');
    !defined('DOCMANAGER_INSERT') && define('DOCMANAGER_INSERT', 'Włóż dokument do BD');
 
 
 
 
// Auditores 
 
 
    !defined('AUDITORIAS_AUDITOR') && define('AUDITORIAS_AUDITOR', 'Audytor');
    !defined('AUDITORIAS_AUDITORIA') && define('AUDITORIAS_AUDITORIA', 'Audit');
    !defined('AUDITOR_IMG') && define('AUDITOR_IMG', 'Audytor img');
    !defined('AUDITORES_EDITAR_AUDITOR') && define('AUDITORES_EDITAR_AUDITOR', 'Edytuj rewidenta');
    !defined('AUDITORES_AUDITOR_ACTUALIZADO') && define('AUDITORES_AUDITOR_ACTUALIZADO', 'Audytor zaktualizowany!');
    !defined('AUDITORES_ADMINISTRAR_AUDITORES') && define('AUDITORES_ADMINISTRAR_AUDITORES', 'Audytorzy zarządzające');
    !defined('AUDITORES_DETALLES') && define('AUDITORES_DETALLES', 'Szczegóły rewidenta');
    !defined('AUDITORES_QUIERE_BORRAR') && define('AUDITORES_QUIERE_BORRAR', 'Jasne rewident?');
    !defined('AUDITORES_AUDITOR_BORRADO') && define('AUDITORES_AUDITOR_BORRADO', 'Audytor usunięte!');
    !defined('AUDITORIAS_ANADIR_AUDITOR') && define('AUDITORIAS_ANADIR_AUDITOR', 'Dodaj rewidenta');
    !defined('AUDITORIAS_CAMBIAR_AUDITOR') && define('AUDITORIAS_CAMBIAR_AUDITOR', 'Zmiana biegłego rewidenta');
    !defined('AUDITORIAS_VER_AUDITOR') && define('AUDITORIAS_VER_AUDITOR', ' Lista audytorów');
    !defined('AUDITOR_ADVERTICE') && define('AUDITOR_ADVERTICE', 'Kliknij na link, aby zobaczyć szczegóły rewidenta');
    !defined('AUDITOR_LISTA') && define('AUDITOR_LISTA', 'Lista audytorów');

 
 
// Informes de Auditorías 
 
 
 
    !defined('AINFORMES_JOIN') && define('AINFORMES_JOIN', 'Audyty i niezgodności');
    !defined('AINFORMES_BUSCAR') && define('AINFORMES_BUSCAR', 'Raport z audytu Szukaj');
    !defined('AINFORMES_HOJA') && define('AINFORMES_HOJA', 'Liść');
    !defined('AINFORMES_EDITAR') && define('AINFORMES_EDITAR', 'Edit Audit Report');
    !defined('AINFORMES_ADMINISTRAR') && define('AINFORMES_ADMINISTRAR', 'Zarządzaj sprawozdań z kontroli');
    !defined('AINFORMES_NUMERO') && define('AINFORMES_NUMERO', 'No AI');
    !defined('AINFORMES_ANADIR') && define('AINFORMES_ANADIR', 'Dodaj raport z audytu');
    !defined('AINFORMES_CAMBIAR') && define('AINFORMES_CAMBIAR', 'Zmień raport z audytu');
    !defined('AINFORMES_INFORME') && define('AINFORMES_INFORME', 'Audit Report');
    !defined('AINFORMES_AREA_AUDITADA') && define('AINFORMES_AREA_AUDITADA', 'kontrolowanego obszaru');
    !defined('AINFORMES_OBJETO') && define('AINFORMES_OBJETO', 'Obiekt');
    !defined('AINFORMES_ADVERTICE') && define('AINFORMES_ADVERTICE', 'Kliknij na link, aby zobaczyć szczegóły');
    !defined('AINFORMES_LISTA_PRINTSCREEN') && define('AINFORMES_LISTA_PRINTSCREEN', 'Wykaz raportów audytorskich');
    !defined('AINFORMES_PRINT_DETAILS') && define('AINFORMES_PRINT_DETAILS', 'Dane z raportu z audytu');
    !defined('AINFORMES_PRINT_ADVERTICE') && define('AINFORMES_PRINT_ADVERTICE', 'Szczegóły');
    !defined('AINFORMES_BACK_TO_PRINTLIST') && define('AINFORMES_BACK_TO_PRINTLIST', 'Powrót do listy');
    !defined('AINFORMES_AI') && define('AINFORMES_AI', 'Audyt Wewnętrzny');
    !defined('AINFORMES_BORRAR') && define('AINFORMES_BORRAR', 'Jasne, sprawozdanie z audytu');
    !defined('AINFORMES_QUIERE_BORRAR') && define('AINFORMES_QUIERE_BORRAR', 'Jasne, sprawozdanie z audytu?');
    !defined('AINFORMES_INFORME_BORRADO') && define('AINFORMES_INFORME_BORRADO', 'Zgłoś usunięte!');
    !defined('AINFORMES_INFORME_ENVIAD0') && define('AINFORMES_INFORME_ENVIAD0', ' Raport wysłany');
    !defined('AINFORMES_PONER_OTRO') && define('AINFORMES_PONER_OTRO', 'Dodaj kolejny raport');
    !defined('AINFORMES_ACTUALIZADO') && define('AINFORMES_ACTUALIZADO', 'Zaktualizowany raport!');
 
 
// Auditorías 
 
 
 
    !defined('AUDITORIAS_JOIN') && define('AUDITORIAS_JOIN', 'Audyty i niezgodności');
    !defined('AUDITORIAS_BUSCAR') && define('AUDITORIAS_BUSCAR', 'Audyty Szukaj');
    !defined('AUDITORIAS_HOJA') && define('AUDITORIAS_HOJA', 'Liść');
    !defined('AUDITORIAS_EDITAR_AUDITORIA') && define('AUDITORIAS_EDITAR_AUDITORIA', 'Edytuj audyt');
    !defined('AUDITORIAS_ADMINISTRAR_AUDITORIAS') && define('AUDITORIAS_ADMINISTRAR_AUDITORIAS', 'Audyty zarządzania');
    !defined('AUDITORIAS_NUMERO_AUDITORIA') && define('AUDITORIAS_NUMERO_AUDITORIA', 'No AI');
    !defined('AUDITORIAS_ANADIR_AUDITORIA') && define('AUDITORIAS_ANADIR_AUDITORIA', 'Dodaj audyt');
    !defined('AUDITORIAS_CAMBIAR_AUDITORIA') && define('AUDITORIAS_CAMBIAR_AUDITORIA', 'Zmienić inspekcję');
    !defined('AUDITORIAS_OBJETO') && define('AUDITORIAS_OBJETO', 'Obiekt');
    !defined('AUDITORIAS_ADVERTICE') && define('AUDITORIAS_ADVERTICE', 'Kliknij na link, aby zobaczyć szczegóły');
    !defined('AUDITORIAS_LISTA_PRINTSCREEN') && define('AUDITORIAS_LISTA_PRINTSCREEN', 'Lista Audyty');
    !defined('AUDITORIAS_PRINT_DETAILS') && define('AUDITORIAS_PRINT_DETAILS', 'Audyt szczegóły');
    !defined('AUDITORIAS_PRINT_ADVERTICE') && define('AUDITORIAS_PRINT_ADVERTICE', 'Szczegóły');
    !defined('AUDITORIAS_BACK_TO_PRINTLIST') && define('AUDITORIAS_BACK_TO_PRINTLIST', 'Powrót do listy');
    !defined('AUDITORIAS_AI') && define('AUDITORIAS_AI', 'Audyt Wewnętrzny');
    !defined('AUDITORIAS_BORRAR_AUDITORIA') && define('AUDITORIAS_BORRAR_AUDITORIA', 'Jasne audytu');
    !defined('AUDITORIAS_QUIERE_BORRAR') && define('AUDITORIAS_QUIERE_BORRAR', 'Jasne audytu?');
    !defined('AUDITORIAS_AUDITORIA_BORRADA') && define('AUDITORIAS_AUDITORIA_BORRADA', 'Audit skasowane!');
    !defined('AUDITORIAS_AUDITORIA_ENVIADA') && define('AUDITORIAS_AUDITORIA_ENVIADA', 'Audit wysłany');
    !defined('AUDITORIAS_PONER_OTRA') && define('AUDITORIAS_PONER_OTRA', 'Dodaj kolejny audyt');
    !defined('AUDITORIA_ACTUALIZADA') && define('AUDITORIA_ACTUALIZADA', 'Audyt datę!');
    !defined('AUDITORIA_SERVICIO') && define('AUDITORIA_SERVICIO', 'Audit service');
    !defined('AUDITORIA_CALIDAD') && define('AUDITORIA_CALIDAD', 'Audytu dep. jakość');
    !defined('AUDITORIA_ALMACEN') && define('AUDITORIA_ALMACEN', 'Przechowywane Audit &racute; n');
    !defined('AUDITORIA_COMPRAS') && define('AUDITORIA_COMPRAS', 'Zakupy audytu');
    !defined('AUDITORIA_FORMACION') && define('AUDITORIA_FORMACION', 'Szkolenie audyt');
    !defined('AUDITORIA_DOCUMENTACION') && define('AUDITORIA_DOCUMENTACION', 'Dokumentacja audytu');
    !defined('AUDITORIA_TALLER') && define('AUDITORIA_TALLER', 'Warsztat Audit');
    !defined('AUDITORIAS_CODIGO_HELP') && define('AUDITORIAS_CODIGO_HELP', 'Zapamiętaj kodowania audytów. Umieścić bezpośrednio powyżej, który pojawia się obok pola wprowadzania. Jeśli umieścisz AI1201, AI1202 należy umieścić to, audyt 02, 2012!');
    !defined('AUDITORIAS_BORRAR_AUDITOR') && define('AUDITORIAS_BORRAR_AUDITOR', 'Jasne rewident');
    !defined('AUDITORIAS_CUESTIONARIOALSERVICIO') && define('AUDITORIAS_CUESTIONARIOALSERVICIO', '* Sprawdź miesięczne odchylenia obsługi klienta <br /> * Przyjazd do pracy brakującej dokumentacji <br /> * Sprawdź zasobów minimalną pojazdu <br /> * Sprawdź czystość i konserwacji pojazdów <br /> * Sprawdź zlecenia zakończyć pracę <br /> * prace Sprawdź');
    !defined('AUDITORIAS_CUESTIONARIOACALIDAD') && define('AUDITORIAS_CUESTIONARIOACALIDAD', '* Upewnij się, że zostały zaktualizowane zasady (jeśli dotyczy) <br/> * Sprawdź, odpowiednie dokumenty są rozpowszechniane systemu i zatwierdzone. <br /> * Sprawdź archovo dokumentów <br/> * Sprawdź, czy lista dokumentów Efekt jest aktualizowana <br/> * Sprawdź, opóźnień w zaplanowanych zadań (audytów, cele szkolenia, wskaźniki, inspekcje) <br/> * Sprawdź, czy dane są aktualizowane w bazie danych, które <br/> Sprawdź zauważyć wpływu dostawców w bazie danych. <br/> * Sprawdź, czy zostały zamknięte NC-AACCPP razie potrzeby, jak również ulepszenia <br/> * Sprawdź, zostały skierowane skargi klientów <br /> Sprawdź wskaźników monitorowania');
    !defined('AUDITORIAS_CUESTIONARIOALMACEN') && define('AUDITORIAS_CUESTIONARIOALMACEN', '* Sprawdź brud i bałagan na półkach i sprzętu roboczego. <br/> * Sprawdź brud na podłodze, lub innych materiałów odpadowych. <br/> * Sprawdź datę wersji, sygnalizacji i przejściu na gaśnice. <br/> * Sprawdź, czy odwiedziny są jasne części, materiałów, okien i innych przeszkód, które uniemożliwiają przejazd osób lub transportery <br/> * Sprawdź status i adekwatność pojemnikach. <br / > * Sprawdź stan bezpieczeństwa w obiektach ogólnych elektrycznych i systemów oświetleniowych. <br/> * Sprawdź czy gaśnice są czyste, aktualne karty rewizyjne i znajduje się w obszarach zaznaczonych na nich. <br / > * Upewnij się, że produkty są wolne od korozji. <br/> * Sprawdź, stosy up. <br/> * Sprawdź, czy nie niezidentyfikowanych materiałów. <br/> * Sprawdź braku wpłaty w pojemnikach na odpady powierzchnie magazynowe <br/> * wycieki ceny.');
    !defined('AUDITORIAS_CUESTIONARIOACOMPRAS') && define('AUDITORIAS_CUESTIONARIOACOMPRAS', '* Sprawdź, certyfikaty zaginionych lub zatwierdzeń dostawców i produktów. <br/> * Upewnij się, że wszystkie kwestie zdobyć opatrzone dostawców. <br/> * Sprawdź, czy personel zna właściwą drogę do otrzymania materiały. <br/> * Sprawdź, każdy dostawca dokonał oceny i wynik jest punktowane. <br/> * Sprawdź, czy faktury lub formularze zamówień są złożone prawidłowo i podpisane przez osobę, która recepciona. < br /> * Sprawdź zatwierdzenie faktur z dowodów dostaw.');
    !defined('AUDITORIAS_CUESTIONARIOAFORMACION') && define('AUDITORIAS_CUESTIONARIOAFORMACION', '* Sprawdź rekordy status szkolenia w bazie danych. <br/> * Sprawdź karty. <br/> * Sprawdź odnowienia. <br/> * Sprawdź kursy nauczał.');
    !defined('AUDITORIAS_CUESTIONARIOADOCUMENTACION') && define('AUDITORIAS_CUESTIONARIOADOCUMENTACION', '* Sprawdź opinie stany. <br/> * Sprawdź stan pamięci i plików. <br/> * Sprawdzanie odpowiednie oświadczenie dystrybucji.');
    !defined('AUDITORIAS_CUESTIONARIOATALLER') && define('AUDITORIAS_CUESTIONARIOATALLER', '- Wskaźniki okazały <br/> - Housekeeping <br/> Workshop - Housekeeping <br/> pojazdów - bezpieczeństwo i zapobieganie <br/> - Dokumentacja <br/> - <br /> separacji zone - <br/> identyfikatory produktów - działania kontrolne <br/>');
    !defined('AUDITORIAS_JOIN_HELP') && define('AUDITORIAS_JOIN_HELP', 'Jeśli są puste pola w kolumnie audytów, niezgodność nie jest dla nunguna audytu lub sprawozdanie z kontroli wewnętrznej nie ma (np. audyt zewnętrzny)');
 
 
 
// -------------------------------------------------------------------------------------------NC`s 
 
 
 
    !defined('NCS_ADVERTICE') && define('NCS_ADVERTICE', 'Kliknij na link, aby edytować niezgodności');
    !defined('NCS_DETAILS') && define('NCS_DETAILS', 'Szczegóły NC');
    !defined('NCS_JOIN_ADVERTICE') && define('NCS_JOIN_ADVERTICE', 'Kliknij na NC lub audytu, aby zobaczyć szczegóły');
    !defined('NCS_AUDITS_JOIN_LIST') && define('NCS_AUDITS_JOIN_LIST', 'NC-tych i audyty, połączonej listy. Kliknij po szczegóły');
    !defined('NCS_ABRIR_NC') && define('NCS_ABRIR_NC', 'Otwórz niezgodności');
    !defined('NCS_ANADIR_NC') && define('NCS_ANADIR_NC', 'Dodaj NC');
    !defined('NCS_MODIFICAR_NC') && define('NCS_MODIFICAR_NC', 'Modyfikuj NC');
    !defined('NCS_EDITAR_NC') && define('NCS_EDITAR_NC', 'Edit NC´s');
    !defined('NCS_ADMINISTRAR_NCS') && define('NCS_ADMINISTRAR_NCS', 'NC zarządzający');
    !defined('NCS_IMPRIMIR_NCS') && define('NCS_IMPRIMIR_NCS', 'Audyty i NC´s');
    !defined('NCS_IMPRIMIR') && define('NCS_IMPRIMIR', 'NC na ekranie Print');
    !defined('NCS_BUSCAR_NCS') && define('NCS_BUSCAR_NCS', 'Szukaj NC´s');
    !defined('NCS_BORRAR_NC') && define('NCS_BORRAR_NC', 'Wyczyść NC´s');
    !defined('NCS_QUIERE_BORRAR') && define('NCS_QUIERE_BORRAR', 'Wyczyść nc/ s?');
    !defined('NCS_NC_BORRADA') && define('NCS_NC_BORRADA', 'NC borrarda!');
    !defined('NCS_NUMERO') && define('NCS_NUMERO', 'Strona nie');
    !defined('NCS_FECHA_APERTURA') && define('NCS_FECHA_APERTURA', 'Data otwarcia');
    !defined('NCS_CODIGO_NC') && define('NCS_CODIGO_NC', 'Kod');
    !defined('NCS_REFERENCIA_DOCUMENTAL') && define('NCS_REFERENCIA_DOCUMENTAL', 'Ref doc');
    !defined('NCS_DESCRIPCION') && define('NCS_DESCRIPCION', 'Opis');
    !defined('NCS_REF_DOC') && define('NCS_REF_DOC', 'Docs. odniesienie');
    !defined('NCS_ABIERTOPOR') && define('NCS_ABIERTOPOR', 'Później');
    !defined('NCS_AFECTAA') && define('NCS_AFECTAA', 'Dotknięty obszar');
    !defined('NCS_CAUSAS') && define('NCS_CAUSAS', 'Przyczyny');
    !defined('NCS_ACCIONES') && define('NCS_ACCIONES', 'Akcje');
    !defined('NCS_PLAZO') && define('NCS_PLAZO', 'Termin');
    !defined('NCS_CIERRE_PARCIAL') && define('NCS_CIERRE_PARCIAL', 'Częściowe zamknięcie');
    !defined('NCS_EFICACIA') && define('NCS_EFICACIA', 'Skuteczność');
    !defined('NCS_FECHACIERRE') && define('NCS_FECHACIERRE', 'Data zamknięcia');
    !defined('NCS_DESVIACION') && define('NCS_DESVIACION', 'Odchylenie');
    !defined('NCS_VISIBLE') && define('NCS_VISIBLE', 'Widoczny');
    !defined('NCS_LISTA') && define('NCS_LISTA', 'NC w Lista');
    !defined('NCS_GRAFICA') && define('NCS_GRAFICA', 'Wykres NC roku przez obszar');
    !defined('NCS_REALIZAR_GRAFICA') && define('NCS_REALIZAR_GRAFICA', 'Wykonaj Graphic');
    !defined('NCS_PORAREA') && define('NCS_PORAREA', 'NC-tych przez obszar');
    !defined('NCS_SELECCIONE_PARA_CAMBIAR') && define('NCS_SELECCIONE_PARA_CAMBIAR', 'Wybierz, aby zmienić');
    !defined('NCS_LASTID_HELP') && define('NCS_LASTID_HELP', 'Umieść następny najwyższy identyfikator, który pojawia się obok pola wprowadzania');
    !defined('NCS_CODIGO_HELP') && define('NCS_CODIGO_HELP', 'Pole to jest dobrowolny kodeks. Użyj kodu, który Ci odpowiada.');
    !defined('NCS_AI_HELP') && define('NCS_AI_HELP', 'Jeśli niezgodność nie wynika z jakiejkolwiek kontroli, nie trzeba umieścić tu nic.');
 
 
 
 
//----------------------------------------------------------------------------------------------- Objetivos 
 
 
 
    !defined('OBJETIVOS_JOIN') && define('OBJETIVOS_JOIN', 'I śledzenie listy docelowej');
    !defined('OBJETIVOS_JOIN_THEAD') && define('OBJETIVOS_JOIN_THEAD', 'Kliknij na ścieżkę docelową, aby pokazać');
    !defined('OBJETIVOS_BORRAR_OBJETIVO') && define('OBJETIVOS_BORRAR_OBJETIVO', 'Jasny cel');
    !defined('OBJETIVOS_QUIERE_BORRAR') && define('OBJETIVOS_QUIERE_BORRAR', 'Jasny cel?');
    !defined('OBJETIVOS_OBJETIVO_BORRADO') && define('OBJETIVOS_OBJETIVO_BORRADO', 'Cel usunięte!');
    !defined('OBJETIVOS_NOMBRE_OBJETIVO') && define('OBJETIVOS_NOMBRE_OBJETIVO', 'Tytuł');
    !defined('OBJETIVOS_ACCION') && define('OBJETIVOS_ACCION', 'Akcja');
    !defined('OBJETIVOS_TAREA') && define('OBJETIVOS_TAREA', 'Zadanie');
    !defined('OBJETIVOS_ORIGEN') && define('OBJETIVOS_ORIGEN', 'Pochodzenie');
    !defined('OBJETIVOS_DETECCION') && define('OBJETIVOS_DETECCION', 'Wykrywanie');
    !defined('OBJETIVOS_CAUSAS') && define('OBJETIVOS_CAUSAS', 'Przyczyny');
    !defined('OBJETIVOS_RECURSOS') && define('OBJETIVOS_RECURSOS', 'Zasoby');
    !defined('OBJETIVOS_FUENTE') && define('OBJETIVOS_FUENTE', 'Źródło');
    !defined('OBJETIVOS_FRECUENCIA') && define('OBJETIVOS_FRECUENCIA', 'Częstotliwość');
    !defined('OBJETIVOS_PLAZO') && define('OBJETIVOS_PLAZO', 'Termin');
    !defined('OBJETIVOS_EJECUTOR') && define('OBJETIVOS_EJECUTOR', 'Wykonawca');
    !defined('OBJETIVOS_PERSEGUIDOR') && define('OBJETIVOS_PERSEGUIDOR', 'Prześladowca');
    !defined('OBJETIVOS_ANOTAR_TAREA') && define('OBJETIVOS_ANOTAR_TAREA', 'Opisywanie zadanie');
    !defined('OBJETIVOS_ANADIR_TAREA') && define('OBJETIVOS_ANADIR_TAREA', 'Dodaj zadanie');
    !defined('OBJETIVOS_TAREA_ANADIDA') && define('OBJETIVOS_TAREA_ANADIDA', 'Dodano Task');
    !defined('OBJETIVOS_TAREA_MODIFICADA') && define('OBJETIVOS_TAREA_MODIFICADA', 'Zadanie modified');
    !defined('OBJETIVOS_MODIFICAR_TAREA') && define('OBJETIVOS_MODIFICAR_TAREA', 'Edytuj zadanie');
    !defined('OBJETIVOS_FECHALIMITE_TAREA') && define('OBJETIVOS_FECHALIMITE_TAREA', 'Ostateczny termin');
    !defined('OBJETIVOS_FECHATERMINACION_TAREA') && define('OBJETIVOS_FECHATERMINACION_TAREA', 'Termin zakończenia');
    !defined('OBJETIVOS_LISTA_TAREAS') && define('OBJETIVOS_LISTA_TAREAS', 'Lista zadań');
    !defined('OBJETIVOS_THEAD') && define('OBJETIVOS_THEAD', 'Uwaga do śledzenia zadanie dla tarczy');
    !defined('OBJETIVOS_LISTA') && define('OBJETIVOS_LISTA', 'Lista docelowa');
    !defined('OBJETIVOS_FOLLOWUP') && define('OBJETIVOS_FOLLOWUP', 'Śledzenie Goal');
    !defined('OBJETIVOS_FOLLOWUP_ADDED') && define('OBJETIVOS_FOLLOWUP_ADDED', 'Śledź dodane');
    !defined('OBJETIVOS_EDITAR_OBJETIVO') && define('OBJETIVOS_EDITAR_OBJETIVO', 'Edytuj cel');
    !defined('OBJETIVOS_ADMINISTRAR_OBJETIVOS') && define('OBJETIVOS_ADMINISTRAR_OBJETIVOS', 'Cele Zarządzanie');
    !defined('OBJETIVOS_ANADIR_OBJETIVO') && define('OBJETIVOS_ANADIR_OBJETIVO', 'Dodaj cel');
    !defined('OBJETIVOS_CAMBIAR_OBJETIVO') && define('OBJETIVOS_CAMBIAR_OBJETIVO', 'Zmień cel');
    !defined('OBJETIVOS_PRINTSCREEN') && define('OBJETIVOS_PRINTSCREEN', 'Zobacz bramkę');
    !defined('OBJETIVOS_DETAILS') && define('OBJETIVOS_DETAILS', 'Szczegóły celu');
    !defined('OBJETIVO_ACTUALIZADO') && define('OBJETIVO_ACTUALIZADO', 'Cel zaktualizowany!');
    !defined('OBJETIVOS_CODIGO_HELP') && define('OBJETIVOS_CODIGO_HELP', 'Zapamiętaj kodowania cele. Umieścić bezpośrednio powyżej, który pojawia się obok pola wprowadzania. Jeśli umieścisz 220, należy umieścić 320, czyli cel 3 2020!');
    !defined('OBJETIVOS_CAMBIAR_SEGUIMIENTO') && define('OBJETIVOS_CAMBIAR_SEGUIMIENTO', 'Zmodyfikować zadanie');
    !defined('OBJETIVOS_ADVERTICE') && define('OBJETIVOS_ADVERTICE', 'Kliknij na zadania do edycji');
    !defined('SEGUIMIENTOS_CHANGE_DETAILS') && define('SEGUIMIENTOS_CHANGE_DETAILS', 'Zadanie do tego celu:');
 
 
// -------------------------------------------------------------------------------------------------Indicadores 
 
 
 
    !defined('INDICADORES_GRAFICAS') && define('INDICADORES_GRAFICAS', 'Graficzne wskaźniki');
 
 
 
 
// -------------------------------------------------------------------------------------------------Formación 
 
 
 
    !defined('FORMACION_ADMINISTRAR_FORMACION') && define('FORMACION_ADMINISTRAR_FORMACION', 'Zarządzanie szkolenie');
    !defined('FORMACION_ANADIR_CURSO') && define('FORMACION_ANADIR_CURSO', 'Dodaj kurs');
    !defined('FORMACION_CAPTION_ADD') && define('FORMACION_CAPTION_ADD', 'Dodaj szkolenie');
    !defined('FORMACION_CAPTION_MODIFY') && define('FORMACION_CAPTION_MODIFY', 'Zmienić kurs');
    !defined('FORMACION_THEAD_MODIFY_ADVERTICE') && define('FORMACION_THEAD_MODIFY_ADVERTICE', 'Kliknij na link, aby zmienić kurs');
    !defined('FORMACION_MODIFICAR_CURSO') && define('FORMACION_MODIFICAR_CURSO', 'Zmiany kursu');
    !defined('FORMACION_BORRAR_CURSO') && define('FORMACION_BORRAR_CURSO', 'Wyczyść pole');
    !defined('CURSO_QUIERE_BORRAR') && define('CURSO_QUIERE_BORRAR', 'Wyczyść pole?');
    !defined('FORMACION_CURSO_BORRADO') && define('FORMACION_CURSO_BORRADO', 'Kurs usunięte!');
    !defined('FORMACION_CURSO') && define('FORMACION_CURSO', 'Kurs');
    !defined('FORMACION_LISTACURSOS') && define('FORMACION_LISTACURSOS', 'Lista przedmiotów');
    !defined('FORMACION_LUGAR') && define('FORMACION_LUGAR', 'Miejsce');
    !defined('FORMACION_HORAS') && define('FORMACION_HORAS', 'Godziny');
    !defined('FORMACION_VALIDACION') && define('FORMACION_VALIDACION', 'Uprawomocnienie');
    !defined('FORMACION_CURSOS_REALIZADOS') && define('FORMACION_CURSOS_REALIZADOS', 'Kursy odbywają');
    !defined('FORMACION_CURSOS_REALIZADOS_TRABAJADOR') && define('FORMACION_CURSOS_REALIZADOS_TRABAJADOR', 'Kursy prowadzone przez pracownika');
 
 
 
 
// -------------------------------------------------------------------------------------------------Servicio 
 
 
 
    !defined('SERVICIO_TRABAJADOR') && define('SERVICIO_TRABAJADOR', 'pracownik');
    !defined('SERVICIO_SERVICIO') && define('SERVICIO_SERVICIO', 'serwis');
    !defined('SERVICIO_ACTIVESTATUS') && define('SERVICIO_ACTIVESTATUS', 'aktywny');
    !defined('SERVICIO_SERVICIOS_ACTIVOS') && define('SERVICIO_SERVICIOS_ACTIVOS', 'Usługi asset');
    !defined('SERVICIO_SERVICIOS_ADVERTICE') && define('SERVICIO_SERVICIOS_ADVERTICE', 'Kliknij na usługi w celu wyświetlenia liczby przeprowadzonych kontroli');
    !defined('SERVICIO_MODIFY_THEAD') && define('SERVICIO_MODIFY_THEAD', 'Kliknij na usługi, aby wyświetlić szczegóły');
    !defined('SERVICIO_INCIDENCIA') && define('SERVICIO_INCIDENCIA', 'zakres');
    !defined('SERVICIO_BORRAR_SERVICIO') && define('SERVICIO_BORRAR_SERVICIO', 'Obsługa jasne');
    !defined('SERVICIO_QUIERE_BORRAR') && define('SERVICIO_QUIERE_BORRAR', 'Clear service / s?');
    !defined('SERVICIO_SERVICIO_BORRADO') && define('SERVICIO_SERVICIO_BORRADO', 'Removal Service!');
    !defined('SERVICIO_ANADIR_SERVICIO') && define('SERVICIO_ANADIR_SERVICIO', 'Dodaj usługę');
    !defined('SERVICIO_ANADIDO') && define('SERVICIO_ANADIDO', 'Dodane Service!');
    !defined('SERVICIO_ACTUALIZADO') && define('SERVICIO_ACTUALIZADO', 'Serwis aktualizowany!');
    !defined('SERVICIO_ERROR_ANADIR') && define('SERVICIO_ERROR_ANADIR', 'Błąd na serwis i ntildir');
    !defined('SERVICIO_MODIFICAR_SERVICIO') && define('SERVICIO_MODIFICAR_SERVICIO', 'Edytuj usługę');
    !defined('SERVICIO_ADMINISTRAR_SERVICIOS') && define('SERVICIO_ADMINISTRAR_SERVICIOS', 'Zarządzanie usługami');
    !defined('SERVICIO_LISTA_SERVICIOS') && define('SERVICIO_LISTA_SERVICIOS', 'Wykaz usług');
    !defined('SERVICIO_AVISOS_GRAFICA') && define('SERVICIO_AVISOS_GRAFICA', 'Komunikat zdarzenia Graph');
 
 
 
 
// -------------------------------------------------------------------------------------------------Trabajadores 
 
 
 
    !defined('TRABAJADOR_TRABAJADOR') && define('TRABAJADOR_TRABAJADOR', 'pracownik');
    !defined('TRABAJADOR_IMG') && define('TRABAJADOR_IMG', 'pracownik img');
    !defined('TRABAJADOR_ANADIR_TRABAJADOR') && define('TRABAJADOR_ANADIR_TRABAJADOR', 'Dodaj pracownika');
    !defined('TRABAJADOR_BORRAR_TRABAJADOR') && define('TRABAJADOR_BORRAR_TRABAJADOR', 'Usuwanie pracownika');
    !defined('TRABAJADOR_QUIERE_BORRAR') && define('TRABAJADOR_QUIERE_BORRAR', 'Usuwanie pracownika / s?');
    !defined('TRABAJADOR_TRABAJADOR_BORRADO') && define('TRABAJADOR_TRABAJADOR_BORRADO', 'Pracownik usunięte!');
    !defined('TRABAJADOR_EDITAR_TRABAJADOR') && define('TRABAJADOR_EDITAR_TRABAJADOR', 'Edytuj pracownika');
    !defined('TRABAJADOR_ADMINISTRAR_TRABAJADORES') && define('TRABAJADOR_ADMINISTRAR_TRABAJADORES', 'pracowników zarządzających');
    !defined('TRABAJADOR_CAMBIAR_TRABAJADOR') && define('TRABAJADOR_CAMBIAR_TRABAJADOR', 'Edytuj pracownika');
    !defined('TRABAJADOR_ACTUALIZADO') && define('TRABAJADOR_ACTUALIZADO', 'Pracownik zaktualizowany!');
    !defined('TRABAJADOR_LISTA_TRABAJADORES') && define('TRABAJADOR_LISTA_TRABAJADORES', 'Lista aktywnych pracowników');
    !defined('TRABAJADOR_THEAD_ADVERTICE') && define('TRABAJADOR_THEAD_ADVERTICE', 'Kliknij na pracownika, aby pokazać liczbę kursów podjętych');
    !defined('TRABAJADOR_THEAD_EDIT') && define('TRABAJADOR_THEAD_EDIT', 'Kliknij na pracownika, aby edytować');
    !defined('TRABAJADOR_HA_HECHO') && define('TRABAJADOR_HA_HECHO', 'Pracownicy, którzy zostali przeszkoleni');
    !defined('TRABAJADOR_ACTIVIDAD') && define('TRABAJADOR_ACTIVIDAD', 'działalność');

 
 
// -------------------------------------------------------------------------------------------------Partes de trabajo 
 
 
 
    !defined('PARTES_HOJAS') && define('PARTES_HOJAS', 'Arkusze');
    !defined('PARTES_THEAD_ADVERTICE') && define('PARTES_THEAD_ADVERTICE', 'Kliknij na element, aby wyświetlić szczegóły');
    !defined('PARTE_DEL_TRABAJADOR') && define('PARTE_DEL_TRABAJADOR', 'Partia Pracy');
    !defined('PARTE_DETALLES') && define('PARTE_DETALLES', 'Szczegóły Część');
    !defined('PARTES_ANADIR_PARTE') && define('PARTES_ANADIR_PARTE', 'Dodaj część pracy');
    !defined('PARTES_EDITAR_PARTE') && define('PARTES_EDITAR_PARTE', 'Edycja części roboczej');
    !defined('PARTES_ADMINISTRAR_PARTES') && define('PARTES_ADMINISTRAR_PARTES', 'Zarządzanie części pracy');
    !defined('PARTES_PRINT') && define('PARTES_PRINT', 'Drukowanie części pracy');
    !defined('PARTES_CAMBIAR_PARTE') && define('PARTES_CAMBIAR_PARTE', 'zmodyfikować część');
    !defined('PARTES_BORRAR') && define('PARTES_BORRAR', 'Część Erase / s');
    !defined('PARTES_QUIERE_BORRAR') && define('PARTES_QUIERE_BORRAR', 'Usunąć część / s?');
    !defined('PARTES_BUSCAR') && define('PARTES_BUSCAR', 'Szukaj części / s');
    !defined('PARTES_PARTE_BORRADO') && define('PARTES_PARTE_BORRADO', 'Część robocza usunięte!');
 
 
 
 
// -------------------------------------------------------------------------------------------------Proveedores 
 
 
 
    !defined('PROVEEDORES_PROVEEDOR') && define('PROVEEDORES_PROVEEDOR', 'dostawca');
    !defined('PROVEEDORES_SUMINISTRO') && define('PROVEEDORES_SUMINISTRO', 'dostarczać');
    !defined('PROVEEDORES_ACTIVESTATUS') && define('PROVEEDORES_ACTIVESTATUS', 'aktywny');
    !defined('PROVEEDORES_BORRAR_PROVEEDOR') && define('PROVEEDORES_BORRAR_PROVEEDOR', 'Usuń z dostawcą');
    !defined('PROVEEDORES_QUIERE_BORRAR') && define('PROVEEDORES_QUIERE_BORRAR', 'Usuń z dostawcą / s?');
    !defined('PROVEEDORES_PROVEEDOR_BORRADO') && define('PROVEEDORES_PROVEEDOR_BORRADO', 'Dostawca usunięte!');
    !defined('PROVEEDORES_ANADIR_PROVEEDOR') && define('PROVEEDORES_ANADIR_PROVEEDOR', 'Dodaj dostawcę');
    !defined('PROVEEDORES_MODIFICAR_PROVEEDOR') && define('PROVEEDORES_MODIFICAR_PROVEEDOR', 'Zmienić dostawcę');
    !defined('PROVEEDORES_ADMINISTRAR_PROVEEDORES') && define('PROVEEDORES_ADMINISTRAR_PROVEEDORES', 'Zarządzanie dostawcami');
    !defined('PROVEEDORES_PROVEEDOR_APROBADO') && define('PROVEEDORES_PROVEEDOR_APROBADO', 'zatwierdzony');
    !defined('PROVEEDORES_PROVEEDOR_ENPRUEBAS') && define('PROVEEDORES_PROVEEDOR_ENPRUEBAS', 'w testach');
    !defined('PROVEEDORES_CRITERIOS_EVALUACION') && define('PROVEEDORES_CRITERIOS_EVALUACION', 'Kryteria oceny');
    !defined('PROVEEDORES_PROVEEDOR_ACTUALIZADO') && define('PROVEEDORES_PROVEEDOR_ACTUALIZADO', 'Provider zaktualizowany!');
    !defined('PROVEEDORES_DATOS') && define('PROVEEDORES_DATOS', 'dane');
    !defined('PROVEEDORES_CIF') && define('PROVEEDORES_CIF', 'CIF');
    !defined('PROVEEDORES_LISTA') && define('PROVEEDORES_LISTA', 'Lista dostawców');
    !defined('PROVEEDORES_THEAD_ADVERTICE') && define('PROVEEDORES_THEAD_ADVERTICE', 'Kliknij na dostawcę, aby zobaczyć szczegóły'); 
    !defined('PROVEEDORES_INCIDENCIA') && define('PROVEEDORES_INCIDENCIA', 'zakres');
    !defined('PROVEEDORES_INCIDENCIAS') && define('PROVEEDORES_INCIDENCIAS', 'incydenty');
    !defined('PROVEEDORES_INCIDENCIAS_DELPROVEEDOR') && define('PROVEEDORES_INCIDENCIAS_DELPROVEEDOR', 'Dostawca Incydenty');
    !defined('PROVEEDORES_INCIDENCIAS_PORPROVEEDOR') && define('PROVEEDORES_INCIDENCIAS_PORPROVEEDOR', 'Incydenty przez Dostawcę');
    !defined('PROVEEDORES_ANOTAR_INCIDENCIA') && define('PROVEEDORES_ANOTAR_INCIDENCIA', 'częstość Annotate');
    !defined('PROVEEDORES_MODIFICAR_INCIDENCIA') && define('PROVEEDORES_MODIFICAR_INCIDENCIA', 'Modyfikuj częstość');
    !defined('PROVEEDORES_BORRAR_INCIDENCIAS') && define('PROVEEDORES_BORRAR_INCIDENCIAS', 'wyraźne przypadki');
    !defined('INCIDENCIAS_QUIERE_BORRAR') && define('INCIDENCIAS_QUIERE_BORRAR', 'Jasne częstość / s?');
    !defined('PROVEEDORES_INCIDENCIA_BORRADA') && define('PROVEEDORES_INCIDENCIA_BORRADA', 'Zapadalność usunięte!');
    !defined('PROVEEDORES_DETALLES') && define('PROVEEDORES_DETALLES', 'Dane dostawcy'); 
    !defined('PROVEEDORES_INCIDENCIAS_PROVEEDOR_ADMIN') && define('PROVEEDORES_INCIDENCIAS_PROVEEDOR_ADMIN', 'Dostawcy zarządzać częstości');
    !defined('PROVEEDORES_ADMINISTRAR_CODIGOSINCIDENCIAS') && define('PROVEEDORES_ADMINISTRAR_CODIGOSINCIDENCIAS', 'Zarządzanie częstość kody');
    !defined('PROVEEDORES_BORRAR_CODIGOINCIDENCIA') && define('PROVEEDORES_BORRAR_CODIGOINCIDENCIA', 'Wyczyść kody zdarzeń');
    !defined('CODIGOSINCIDENCIAS_QUIERE_BORRAR') && define('CODIGOSINCIDENCIAS_QUIERE_BORRAR', 'Kasowanie kodów zdarzeń?');
    !defined('CODIGOSINCIDENCIAS_LASTID_HELP') && define('CODIGOSINCIDENCIAS_LASTID_HELP', 'Umieść następny wyższy numer kodu, który pojawia się obok pola edycji, przez kody reguł.Kod widzisz to ostatnia ma zostać wstawiony.');
    !defined('PROVEEDORES_NOMBRE_INCIDENCIA') && define('PROVEEDORES_NOMBRE_INCIDENCIA', 'Nazwa Zapadalność');
    !defined('PROVEEDORES_ANADIR_CODIGOINCIDENCIA') && define('PROVEEDORES_ANADIR_CODIGOINCIDENCIA', 'Dodaj występowania kodu');
    !defined('PROVEEDORES_MODIFICAR_CODIGOINCIDENCIA') && define('PROVEEDORES_MODIFICAR_CODIGOINCIDENCIA', 'Modyfikowanie kodu zdarzenia');
    !defined('PROVEEDORES_CODIGO_ANADIDO') && define('PROVEEDORES_CODIGO_ANADIDO', 'Dodano kod!');
    !defined('PROVEEDORES_LISTA_CODIGOS') && define('PROVEEDORES_LISTA_CODIGOS', 'Codebook');
    !defined('PROVEEDORES_CODIGOS_ADVERTICE') && define('PROVEEDORES_CODIGOS_ADVERTICE', 'Kliknij na kod, aby zmienić');
    !defined('PROVEEDORES_CODIGO_INCIDENCIA') && define('PROVEEDORES_CODIGO_INCIDENCIA', 'Częstość Code');
    !defined('PROVEEDORES_CODIGO_ACTUALIZADO') && define('PROVEEDORES_CODIGO_ACTUALIZADO', 'Kod zaktualizowany!');
    !defined('PROVEEDORES_CODIGOINCIDENCIA_BORRADO') && define('PROVEEDORES_CODIGOINCIDENCIA_BORRADO', 'Kod padania usunięte!');
    !defined('PROVEEDORES_INCIDENCIA_CODIGO') && define('PROVEEDORES_INCIDENCIA_CODIGO', 'kod');
    !defined('PROVEEDORES_JOIN') && define('PROVEEDORES_JOIN', 'Lista dostawców i incydentach'); 
    !defined('PROVEEDORES_ADMINISTRAR_AREASSENSIBLES') && define('PROVEEDORES_ADMINISTRAR_AREASSENSIBLES', 'Zarządzanie obszarów wrażliwych');
    !defined('PROVEEDORES_ANADIR_AREASENSIBLE') && define('PROVEEDORES_ANADIR_AREASENSIBLE', 'Dodaj wrażliwego obszaru');
    !defined('AREASENSIBLE_QUIERE_BORRAR') && define('AREASENSIBLE_QUIERE_BORRAR', 'Usuwanie poufnych obszar?');
    !defined('PROVEEDORES_BORRAR_AREASSENSIBLES') && define('PROVEEDORES_BORRAR_AREASSENSIBLES', 'Usuń wrażliwego obszaru');
    !defined('PROVEEDORES_AREA_SENSIBLE_BORRADA') && define('PROVEEDORES_AREA_SENSIBLE_BORRADA', 'usunięta wrażliwego obszaru!');
    !defined('PROVEEDORES_MODIFICAR_AREASENSIBLE') && define('PROVEEDORES_MODIFICAR_AREASENSIBLE', 'Modyfikuj wrażliwego obszaru');
    !defined('PROVEEDORES_AREASENSIBLE_ANADIDA') && define('PROVEEDORES_AREASENSIBLE_ANADIDA', 'Dodane wrażliwego obszaru!');
    !defined('PROVEEDORES_LISTA_AREASSENSIBLES') && define('PROVEEDORES_LISTA_AREASSENSIBLES', 'Wykaz obszarów wrażliwych');
    !defined('PROVEEDORES_AREASSENSIBLES_ADVERTICE') && define('PROVEEDORES_AREASSENSIBLES_ADVERTICE', 'Kliknij na obszar wrażliwy, aby edytować');
    !defined('PROVEEDORES_AREASENSIBLE') && define('PROVEEDORES_AREASENSIBLE', 'wrażliwy obszar');
    !defined('PROVEEDORES_AREASENSIBLE_ACTUALIZADA') && define('PROVEEDORES_AREASENSIBLE_ACTUALIZADA', 'wrażliwy zaktualizowany!');
 
 
 
 
// ------------------------------------------------------------------------------------------------- Inspecciones
 
    !defined('INSPECCIONES_PRINTSCREEN') && define('INSPECCIONES_PRINTSCREEN', 'Inspekcja szczegóły');
    !defined('INSPECCIONES_BUSCAR') && define('INSPECCIONES_BUSCAR', 'inspekcja Szukaj');
    !defined('INSPECCIONES_LISTA') && define('INSPECCIONES_LISTA', 'Lista kontroli');
    !defined('INSPECCIONES_BORRAR_INSPECCION') && define('INSPECCIONES_BORRAR_INSPECCION', 'jasne inspektorat');
    !defined('INSPECCIONES_QUIERE_BORRAR') && define('INSPECCIONES_QUIERE_BORRAR', 'Wyczyść inspektoratu?');
    !defined('INSPECCIONES_INSPECCION_BORRADA') && define('INSPECCIONES_INSPECCION_BORRADA', 'Inspekcja usunięte!');
    !defined('INSPECCIONES_ANADIR_INSPECCION') && define('INSPECCIONES_ANADIR_INSPECCION', 'Dodaj inspekcję');
    !defined('INSPECCIONES_CAMBIAR_INSPECCION') && define('INSPECCIONES_CAMBIAR_INSPECCION', 'Edit Watch');
    !defined('INSPECCIONES_EDITAR_INSPECCION') && define('INSPECCIONES_EDITAR_INSPECCION', 'Edytuj inspekcję');
    !defined('INSPECCIONES_ADMINISTRAR_INSPECCIONES') && define('INSPECCIONES_ADMINISTRAR_INSPECCIONES', 'podawać inspekcje');
    !defined('INSPECCIONES_THEAD_ADVERTICE') && define('INSPECCIONES_THEAD_ADVERTICE', 'Kliknij na datę aby zobaczyć szczegóły');
    !defined('INSPECCIONES_ANADIR_CODIGOSINCIDENCIA') && define('INSPECCIONES_ANADIR_CODIGOSINCIDENCIA', 'Dodaj występowania kodu'); 
    !defined('INSPECCIONES_MODIFICAR_CODIGOSINCIDENCIA') && define('INSPECCIONES_MODIFICAR_CODIGOSINCIDENCIA', 'Modyfikowanie kodu zdarzenia'); 
    !defined('INSPECCIONES_ADMINISTRAR_CODIGOSINCIDENCIAS') && define('INSPECCIONES_ADMINISTRAR_CODIGOSINCIDENCIAS', 'Zarządzanie częstość kody'); 
    !defined('INSPECCIONES_CODIGOS_ADVERTICE') && define('INSPECCIONES_CODIGOS_ADVERTICE', 'Kliknij na kod, aby edytować');
    !defined('INSPECCIONES_LISTA_CODIGOS') && define('INSPECCIONES_LISTA_CODIGOS', 'Lista kodów częstości');
 
 
// -----------------------------------------------------------------------------------------------Inspectores 
 
    !defined('INSPECCIONES_INSPECTOR') && define('INSPECCIONES_INSPECTOR', 'inspektor');
    !defined('INSPECTORES_LISTA') && define('INSPECTORES_LISTA', 'Wykaz inspektorów');
    !defined('BORRAR_INSPECTOR') && define('BORRAR_INSPECTOR', '  jasne, inspektor');
    !defined('INSPECTORES_EDITAR_INSPECTOR') && define('INSPECTORES_EDITAR_INSPECTOR', '  Edit inspektor');
    !defined('INSPECTORES_ADMINISTRAR_INSPECTORES') && define('INSPECTORES_ADMINISTRAR_INSPECTORES', '  inspektorzy zarządzające');
    !defined('INSPECTORES_ANADIR_INSPECTOR') && define('INSPECTORES_ANADIR_INSPECTOR', '  Dodaj inspektora');
    !defined('INSPECTORES_CAMBIAR_INSPECTOR') && define('INSPECTORES_CAMBIAR_INSPECTOR', '  Zmiana inspektora');
    !defined('INSPECTORES_QUIERE_BORRAR') && define('INSPECTORES_QUIERE_BORRAR', 'Jasne, inspektorze?');
    !defined('INSPECTORES_INSPECTOR_BORRADO') && define('INSPECTORES_INSPECTOR_BORRADO', 'Inspektor usunięte!');
    !defined('INSPECTORES_INSPECTOR_ANADIDO') && define('INSPECTORES_INSPECTOR_ANADIDO', 'Inspektor dodany!');
 
 
// Extintores 
 
 
 
    !defined('EXTINTORES_EXTINTOR') && define('EXTINTORES_EXTINTOR', 'gaśnica');
    !defined('EXTINTORES_EXTINTORES') && define('EXTINTORES_EXTINTORES', 'gaśnice');
    !defined('EXTINTORES_CLIENTE') && define('EXTINTORES_CLIENTE', 'klient');
    !defined('EXTINTORES_EJECUCION') && define('EXTINTORES_EJECUCION', 'egzekucja');
    !defined('EXTINTORES_LISTA') && define('EXTINTORES_LISTA', 'Lista gaśnice');
    !defined('EXTINTORES_DETALLES') && define('EXTINTORES_DETALLES', 'Gaśnica szczegóły');
    !defined('EXTINTORES_NUMEXTINTORES') && define('EXTINTORES_NUMEXTINTORES', 'Liczba gaśnic');
    !defined('EXTINTORES_PROXIMA_EJECUCION') && define('EXTINTORES_PROXIMA_EJECUCION', 'Obok realizacji');
    !defined('EXTINTORES_FECHA_FABRICACION') && define('EXTINTORES_FECHA_FABRICACION', 'Data produkcji');
    !defined('EXTINTORES_AGENTE_EXTINTOR') && define('EXTINTORES_AGENTE_EXTINTOR', 'gaszenie');
    !defined('EXTINTORES_NDESERIE') && define('EXTINTORES_NDESERIE', 'Numer seryjny');
    !defined('EXTINTORES_BORRAR_EXTINTOR') && define('EXTINTORES_BORRAR_EXTINTOR', 'jasne Gaśnica');
    !defined('EXTINTOR_QUIERE_BORRAR') && define('EXTINTOR_QUIERE_BORRAR', 'Jasne gaśnica / s?');
    !defined('EXTINTORES_EXTINTOR_BORRADO') && define('EXTINTORES_EXTINTOR_BORRADO', 'Usunięte Gaśnica');
    !defined('EXTINTORES_BUSCAR_EXTINTOR') && define('EXTINTORES_BUSCAR_EXTINTOR', 'Szukaj Gaśnica');
    !defined('EXTINTORES_ANADIR_EXTINTOR') && define('EXTINTORES_ANADIR_EXTINTOR', 'Dodaj gaśnica');
    !defined('EXTINTORES_EXTINTOR_ANADIDO') && define('EXTINTORES_EXTINTOR_ANADIDO', 'Dodane Gaśnica');
    !defined('EXTINTORES_MODIFICAR_EXTINTOR') && define('EXTINTORES_MODIFICAR_EXTINTOR', 'Modyfikuj gaśnica');
    !defined('EXTINTORES_EDITAR_EXTINTOR') && define('EXTINTORES_EDITAR_EXTINTOR', 'Edit Gaśnica');
    !defined('EXTINTORES_ADMINISTRAR_EXTINTORES') && define('EXTINTORES_ADMINISTRAR_EXTINTORES', 'Gaśnice zarządzające');
    !defined('EXTINTORES_THEAD_ADVERTICE') && define('EXTINTORES_THEAD_ADVERTICE', 'Kliknij na gaśnicy, aby edytować');
    !defined('EXTINTORES_EXTINTOR_ACTUALIZADO') && define('EXTINTORES_EXTINTOR_ACTUALIZADO', 'Gaśnica zaktualizowany!');
 
 
 
 
// Equipos de medida 
 
 
 
    !defined('EQUIPOS_EQUIPO') && define('EQUIPOS_EQUIPO', 'team:');
    !defined('EQUIPOS_EQUIPOS') && define('EQUIPOS_EQUIPOS', 'metrologia');
    !defined('EQUIPOS_LISTA') && define('EQUIPOS_LISTA', 'Lista wyposażenia pomiarowego');
    !defined('EQUIPOS_MODELO') && define('EQUIPOS_MODELO', 'Model:');
    !defined('EQUIPOS_FRECUENCALIB') && define('EQUIPOS_FRECUENCALIB', 'Częstotliwość kalibracji:');
    !defined('EQUIPOS_CRITERIO') && define('EQUIPOS_CRITERIO', 'Kryteria akceptacji:');
    !defined('EQUIPOS_UBICACION') && define('EQUIPOS_UBICACION', 'Lokalizacja:');
    !defined('EQUIPOS_ANADIR') && define('EQUIPOS_ANADIR', 'Dodaj sprzęt pomiarowy');
    !defined('EQUIPOS_BORRAR') && define('EQUIPOS_BORRAR', 'Sprzęt pomiarowy Usuń');
    !defined('EQUIPOS_QUIERE_BORRAR') && define('EQUIPOS_QUIERE_BORRAR', 'Wyczyść zespół?');
    !defined('EQUIPO_BORRADO') && define('EQUIPO_BORRADO', 'Zespół skasowane!');
    !defined('EQUIPOS_CAMBIAR') && define('EQUIPOS_CAMBIAR', 'Modyfikuj goście');
    !defined('EQUIPOS_EDITAR') && define('EQUIPOS_EDITAR', 'Edytuj goście');
    !defined('EQUIPOS_ADMINISTRAR') && define('EQUIPOS_ADMINISTRAR', 'zarządzanie komputerami');
    !defined('EQUIPOS_THEAD_ADVERTICE') && define('EQUIPOS_THEAD_ADVERTICE', 'Kliknij na zespół, aby zobaczyć szczegóły');
    !defined('EQUIPOS_PRINT_DETAILS') && define('EQUIPOS_PRINT_DETAILS', 'Szczegóły wyposażenia');
    !defined('EQUIPOS_CALIBRACION') && define('EQUIPOS_CALIBRACION', 'kalibrowanie');
 
 
 
 
// Calibraciones 
 
 
 
    !defined('CALIBRACIONES_CALIBRACION') && define('CALIBRACIONES_CALIBRACION', 'kalibrowanie');
    !defined('CALIBRACIONES_CALIBRACIONES') && define('CALIBRACIONES_CALIBRACIONES', 'kalibracje');
    !defined('CALIBRACIONES_ENCALIBRACION') && define('CALIBRACIONES_ENCALIBRACION', 'w kalibracji');
    !defined('CALIBRACIONES_ENREPARACION') && define('CALIBRACIONES_ENREPARACION', 'w naprawie');
    !defined('CALIBRACIONES_LISTA') && define('CALIBRACIONES_LISTA', 'Lista kalibracje');
    !defined('CALIBRACIONES_DETALLES') && define('CALIBRACIONES_DETALLES', 'Szczegóły dotyczące kalibracji');
    !defined('CALIBRACIONES_BORRAR') && define('CALIBRACIONES_BORRAR', 'jasne Calibration');
    !defined('CALIBRACION_QUIERE_BORRAR') && define('CALIBRACION_QUIERE_BORRAR', 'Jasne Kalibracja / jest?');
    !defined('CALIBRACION_BORRADA') && define('CALIBRACION_BORRADA', 'Calibration usunięta');
    !defined('BUSCAR_CALIBRACION') && define('BUSCAR_CALIBRACION', 'Calibration Szukaj');
    !defined('CALIBRACIONES_ANADIR') && define('CALIBRACIONES_ANADIR', 'Dodaj Kalibracja');
    !defined('CALIBRACION_ANADIDA') && define('CALIBRACION_ANADIDA', 'Dodane Calibration');
    !defined('CALIBRACIONES_MODIFICAR') && define('CALIBRACIONES_MODIFICAR', 'Modyfikuj Kalibracja');
    !defined('CALIBRACIONES_EDITAR') && define('CALIBRACIONES_EDITAR', 'Edytuj Kalibracja');
    !defined('CALIBRACIONES_ADMINISTRAR') && define('CALIBRACIONES_ADMINISTRAR', 'Kalibracja zarządzające');
    !defined('CALIBRACIONES_THEAD_ADVERTICE') && define('CALIBRACIONES_THEAD_ADVERTICE', 'Kliknij na kalibracji, aby edytować');
    !defined('CALIBRACION_ACTUALIZADA') && define('CALIBRACION_ACTUALIZADA', 'Calibration datę!');
 
?>

