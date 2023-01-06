

Quando si crea un articolo nella sezione "Magazzino" si dovrebbe anche creare un campo personalizzato con la key 'data_scadenza' e il valore formattato cosi '01/01/2023' 
Nella pagina impostazioni 'magazzino-facie' vanno inseriti il token del bot con il quale mandare il messaggio e chat-id di telegram a cui mandare il messaggio

Il plugin ogni 24h cerca il CPT Magazzino per articoli che hanno il meta key 'data_scadenza' uguale alla data corrente  o inferiore di un giorno alla data corrente e crea un messaggio con link dell'articolo ed il titolo e lo invia su telegram. 

IL CPT Magazzino non ha nessun'altro campo abilitato, ed è solo per provare l'automazione.
