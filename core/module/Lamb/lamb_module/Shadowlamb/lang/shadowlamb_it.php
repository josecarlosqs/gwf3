<?php
$c = "#";
$b = chr(2);
/**
 * Please respect weird punctuations when doing human readable translations
 * Examples: .leading dot. missing dots,  leading spaces Etc. 
 * 
 */
$lang = array(
############
### Bits ###
############
# Tiny bits
'name' => 'Nome',
'none' => 'Nessuno',
'over' => 'Sopra',
'items' => 'Oggetti',
'mount' => 'Mezzo di Trasporto',
'bank_items' => 'I tuoi oggetti in banca',
'unknown' => 'Sconosciuto',
'unknown_contr' => 'Appaltatore Sconosciuto',
'modifiers' => " {$b}Modificatori{$b}: %s.", # statlist
'm' => 'm', # metres
'g' => '%dg', # gram
'kg' => '%.02fkg', # kilogram
'busy' => 'occupato per %s secondi.', # duration
'eta' => 'ETA: %s.', # duration
'hits1' => ', colpisce %s causando %s punti danno', # player, damage
'hits2' => ', colpisce %s causando %s punti danno (%s/%s)HP rimasti', # player, damage, hp left, max hp
'kills' => ', uccide %s, avendo causato %s punti danno', # player, damage
'loot_nyxp' => '. Hai ricevuto %s e %.02f XP',
'page' => 'pagina %d/%d: %s.',
'from_brewing' => 'preparando pozioni magiche',
'members' => '%d membri',

# Options
'opt_help' => 'Aiuto',
'opt_lock' => 'Blocca Equipaggiamento',
'opt_bot' => 'Flag Giocatore Bot',
'opt_norl' => 'Leader Permanente',
'enabled' => 'attivata',
'disabled' => 'disattivata',

# PrintF-Formats
'fmt_list' => ', %s', # item
'fmt_gain' => '%s%.02f(%.02f/%.02f)%s', # sign, gain, now, max, unit
'fmt_asl' => "{$b}Età{$b}:%d, %dcm %s", # age, height, weight
'fmt_requires' => " {$b}Richiede{$b}: %s.", # statted list
'fmt_stats' => ", {$b}%s{$b}:%s%s", # stat-long, base, (now), stat, now
'fmt_cityquests' => ', %s(%.01f%%)', # cityname, percent
'fmt_sumlist' => ", {$b}%s{$b}-%s(%s)", # enum, playername, summand
'fmt_quests' => ", %1\$s%2\$d%1\$s-%3\$s", # boldy, id, name
'fmt_rawitems' => ", {$b}%s{$b}-%s", # id, itemname
'fmt_items' => ", {$b}%s{$b}-%s%s", # id, itemname, (amt), amt
'fmt_effect' => ", {$b}%s{$b}:%s(%s)", # stat, gain, duration
'fmt_equip' => ", {$b}%s{$b}:%s", # long type, item, short type
'fmt_hp_mp' => ", {$b}%1\$s{$b}-%2\$s%5\$s(%3\$s/%4\$s)%5\$s", # $member->getEnum(), $member->getName(), $hpmp, $hpmmpm, $b2, $b1
'fmt_spells' => ", {$b}%s{$b}-%s:%s%s", # id, spellname, base, (adjusted), adjusted
'fmt_lvlup' => ', %4$s%1$s%4$s:%2$s(%4$s%3$s%5$s%4$s)', # field, tobase, karma, bold, K, couldbit
'fmt_giveitems' => ", {$b}%sx%s{$b}", # amt, itemname
'fmt_bazar_shop' => ", %dx{$b}%s{$b}(%s)", # itemcount, itemname, price
'fmt_bazar_shops' => ", {$b}%s{$b}(%d)", # player, itemcount
'fmt_bazar_search' => ", \"{$b}%s %s{$b}\"(%sx%s)", # player, itemname, amount, price

# Party actions in "You are %s", "Your party is %s", (UGLY)
'empty_party' => 'un gruppo vuoto',
'pa_delete' => "{$b}essere cancellato{$b}.",
'pa_talk' => "{$b}parlando{$b} a %s. %s rimasti. Ultima azione: %s", # enemy party, duration, last action
'pa_fight' => "{$b}combattendo{$b} contro %s. Ultima azione: %s", # enemy party last action.
'pa_inside' => "{$b}in{$b} %s.", # location
'pa_outside1' => "{$b}fuori{$b} of %s.", # location
'pa_outside2' => "da qualche parte in %s.", # location
'pa_sleep' => "{$b}dormendo{$b} in %s.", # location
'pa_travel' => "{$b}viaggiando{$b} verso %s. %s rimasti.", # location, duration
'pa_explore' => "{$b}esplorando{$b} %s. %s rimasti.", # location, duration
'pa_goto' => "{$b}andando{$b} a %s. %s rimasti.", # location, duration
'pa_hunt' => "{$b}cacciando{$b} %s. %s rimasti.", # location, duration
'pa_hijack' => "{$b}svaligiando{$b} %s in %s. %s rimasti.", # playername, location, duration

# Quest states
'qu_open' => 'Aperte',
'qu_deny' => 'Rifiutate',
'qu_done' => 'Finite',
'qu_fail' => 'Fallite',
'qu_abort' => 'Abortite',
'qu_All' => 'Tutte',
'qu_Browse' => 'Naviga',

# Sums
'sum_age' => 'età',
'sum_bmi' => 'masse corporee',
'sum_height' => 'altezze',

# Stubs
'stub_found' => 'Hai trovato il %s. Non c\'è ancora una descrizione.', # location
'stub_enter' => 'Entri in %s. non c\'è ancora nessun testo.', # location
'stub_shop_slogan' => 'Benvenuto al negozio di %s.', # player
'stub_found_bazar' => 'Hai trovato il bazaar locale, un posto dove puoi offrire i tuoi oggetti e comprarne di nuovi.',
'stub_enter_bazar' => 'Entri nel bazaar. Vedi %d negozi con un totale di %d oggetti.', # shopcount, itemcount
'stub_found_clanhq' => 'Hai trovato il quartier generale del clan.',
'stub_enter_clanhq' => 'Entri nel quartier generale del clan.',
'stub_found_elevator' => 'Hai trovato il %s. Un cartelo recita: "MAX %s KG".',
'stub_enter_elevator' => 'Entri nel %s. Un cartelo recita: "MAX %s KG".',
'stub_found_bank' => 'Hai trovato la Banca di %s. Tutte le transazioni sono effettuate tramite slot machines.',
'stub_enter_bank' => 'Hai trovato la Banca di %s. Vedi alcuni clienti al bancone ed anche alcuni ufficiali di sicurezza.',
'stub_found_blacksmith' => 'Trovi un piccolo negozio, "Il Fabbro". Sembra che possano migliorare il tuo equipaggiamento.',
'stub_enter_blacksmith' => 'Entri il fabbro di %s. Vedi due nani al bancone.',

# Clan history
'ch_0' => '%s ha creato il clan %s.', # player, clanname
'ch_1' => '%s ha richiesto di unirsi al clan come membro #%s.', # player, membernum
'ch_2' => '%s si è unito al tuo clan come utente #%s.', # player, membernum
'ch_3' => '%s ha lasciato il tuo clan, che ora ospita %s membri.', # player, amt
'ch_4' => "{$b}%s{$b}: \"%s\"", # player, message
'ch_5' => '%s ha versato %s nella banca del clan.', # player, nuyen
'ch_6' => '%s ha ritirato %s dalla banca del clan.', # player, nuyen
'ch_7' => '%s ha inserito %s %s nella banca del clan.', # player, amt, item 
'ch_8' => '%s ha ritirato %s %s dalla banca del clan.', # player, amt, item
'ch_9' => '%s ha comprato degli slot per membri ed ora il clan può contenere fino a %s.', # player, memberslots
'ch_10' => '%s ha aumentato la capacità di nuyen ed ora il clan può immagazzinare fino a %s.', # player, maxnuyen
'ch_11' => '%s ha acquistato dei magazzini aggiuntivi ed ora il clan può immagazzinare fino a %s.', # player, maxstorage

# Bounty
'meet_bounty' => " C\'è una {$b}taglia{$b} su %s.", # sumlist
'no_bounty' => 'Questo giocatore non ha nessuna taglia.',
'total_bounty' => "C\'è una {$b}taglia di %s{$b} per %s: %s.", # total, player, details
'no_bounties' => 'Non sono presenti taglie al momento.',
'bounty_page' => 'Pagina delle taglie %s/%s: %s.',

# Bad karma
'info_bk' => ', %s ha %d bad_karma', # player, badkarma

# Ingame help
'hlp_in_outside' => 'Quando trovi delle località, ti troverai al di fuori di esse. Usa #goto o #enter per entrarvi. Puoi #(exp)lorare ancora per trovare altre località.', #TRANS: check command #explore
'hlp_clan_enter' => "Unisciti al clan con {$c}abbandona, {$c}richiedi e {$c}accetta. Crea un clan con {$c}crea. Compra dei miglioramenti ed un motto con {$c}gestisci. Imposta le opzioni con {$c}alterna. Accedi alla banca oggetti del clan con {$c}versa, {$c}ritira e {$c}guarda, e a quella degli oggetti con {$c}versay e {$c}ritiray.",
'hlp_bank' => "In una banca puoi usare {$c}versa e {$c}ritira per lasciare e prendere oggetti, e {$c}versay and {$c}ritiray per versare e ritirare nuyen. Usa {$c}guarda per visualizzare o cercare i tuoi oggetti nella banca. Ogni transazione ti costa %s.",
'hlp_bazar' => "Nel bazaar puoi vendere i tuoi oggetti. Qui puoi usare #versa, #ritira, #guarda, #cerca, #compra, #compramigliore, #compraslot, #slogan e #prezzo.",
'hlp_elevator' => 'Negli ascensori puoi usare #su, #giù e #piano.',
'hlp_exit' => 'Puoi ritornare in questa località per #esci la costruzione.',
'hlp_hotel' => 'Puoi pagare %s per #dormi qui e recuperare gli HP/MP del tuo gruppo.',
'hlp_hack' => ' Puoi usare un Cyberdeck per hackare in un computer.',
'hlp_search' => ' Puoi usare #cerca qui per cercare oggetti nella stanza.',
'hlp_second_hand' => 'Puoi vendere oggetti migliorati qui per prezzi più alti. Gli oggetti migliorati venduti qui resteranno in vendita nel negozio.',
'hlp_store' => 'In questo negozio puoi usare %s.',
'hlp_cyberdeck' => 'Questo oggetto funziona solo in località dotate di computer.',
'hlp_cyberdeck_targets' => 'Non vedi alcun Computer con un interfaccia Headcomputer qui.',
'hlp_start' => "{$b}Razze conosciute{$b}: %s. {$b}Sessi conosciuti{$b}: %s.",
'hlp_blacksmith' => "Dal fabbro utilizza {$c}migliora per migliorare l'equipaggiamento con le rune. Inoltre puoi {$c}rompere o {$c}pulire gli oggetti in rune. E\' inoltre possibile {$c}dividere le rune. Qui funzionano anche {$c}guarda, {$c}compra e {$c}vendi.",

# Start storyline
'start_1' => "Ti svegli una stanza irradiata dal sole... Sembra che sia passato mezzogiorno... ti sembra di trovarti in una stanza d\'albergo.",
'start_2' => "Cos\'è successo?... Non ricordi niente.... Oddio, hai addirittura scordato il tuo nome.",
'start_3' => "Controlli il tuo {$b}{$c}inventario{$b} e trovi una penna di 'Renraku Inc.'. Lasci la tua stanza e ti dirigi al bancone. Usa {$b}{$c}parla{$b} per parlare con il portiere.",
'start_4' => "Usa {$b}{$c}c{$b} per vedere i comandi disponibili. Controlla {$b}{$c}aiuto{$b} per visualizzare i file d\'aiuto di Shadowlamb. Usa {$c}aiuto <comando> per vedere il file d\'aiuto per un comando.",

# Knowledge
'ks_words' => 'Parola',
'ks_spells' => 'Incantesimo',
'ks_places' => 'Posto',
'kp_words' => 'Parole',
'kp_spells' => 'Incantesimi',
'kp_places' => 'Posti',

# Party loot
'pl_unknown' => 'Sconosciuto',
'pl_cycle' => 'Ciclo',
'pl_random' => 'Casuale',
'pl_killer' => 'Assassino',

# Clan toggles
'ct_moderation' => 'Moderazione',

##########################
#   0000-4999   = Errors #
##########################
'0000' => 'Non hai ancora iniziato il gioco. Digita #inizia razza genere per iniziare a giocare.',
'0001' => 'Devi effetuare il login per giocare.',
		
'1002' => 'Ti serve un livello minimo di %d per urlare.', # level
'1003' => 'Aspetta %s prima di urlare ancora.', # duration
'1004' => 'Non hai alcuna quest in %s.', # section
// '1005' => 'You don\'t know any word.',
'1006' => 'Non hai i requisiti richiesti: %s.', # statted-list
'1007' => 'Non è stato trovato alcun elemento che corrisponda ai parametri di ricerca.',
'1008' => 'Non ci sono oggetti qui.',
'1009' => 'Questa pagina non esiste!',
'1010' => 'Non ci sono quest qui.',
'1011' => 'Non hai ancora impostato la tua asl con {$b}#aslset{$b}. Devi farlo per iniziare a muoverti nel gioco.',
'1012' => 'Il target è sconosciuto.',
'1013' => 'Non puoi usare questo oggetto.',
'1014' => 'Non puoi equipaggiare questo oggetto.',
'1015' => 'Il tuo gruppo (somma dei livelli %d) non può attaccare un gruppo con una somma dei livelli %d poichè la differenza di livello è più ampia di %d.',
'1016' => 'Hai giò impostato il tuo asl a: %s.', # aslstring
'1017' => 'Questo giocatore è sconosciuto o non è in memoria.',
'1018' => 'Questo nome giocatore è ambiguo. Prova la versione {server}.',
'1019' => 'Non sei in un clan, fratello.',
'1020' => 'Non so cosa sia un "%s".', # itemname
'1021' => 'Non hai equipaggiato nulla che sia equiparabile a "%s".', # itemname
'1022' => 'Non sei in un negozio.',
'1023' => 'Non hai questa conoscenza.',
'1024' => 'Puoi aumentare di livello solo attributi, abilità, conoscenze e incantesimi. Inoltre, non puoi aumentare di livello la tua essenza.',
'1025' => 'Devi imparare %s prima.', # field
'1026' => 'Hai già raggiunto il livello massimo di %d per %s.',
'1027' => 'Devi avere %d karma per aumentare il livello base per %s da %d a %d, ma hai solo %d karma.',
'1028' => '%s non è qui o il suo nome è ambiguo.',
'1029' => 'Non hai quell\'oggetto.',
'1030' => 'Non puoi intercambiare la stessa cosa.',
'1031' => 'Non sei al di fuori di una località.',
'1032' => 'Non sei il leader del gruppo.',
'1033' => 'Il tuo gruppo si stà muovendo. Prova questo comando quando sei fermo.',
'1034' => 'Non puoi passare alla modalità corsa quando hai passato il livello 2.',
'1035' => 'Nei sotterranei non hai nessun mezzo di trasporto.',
'1036' => 'Questo comando non funziona in combattimento.',
'1037' => 'Non puoi infilare oggetti in quel mezzo di trasporto.',
'1038' => 'Specifica un numero positivo di oggetti.',
'1039' => 'Non puoi inserire mezzi di trasporto nel tuo %s.', # mount name
'1040' => 'Non hai così tanti %s.', # itemname
'1041' => 'Il tuo %s(%s/%s) non ha spazio per %d dei tuoi %s (%s).', # mountname, stored, storage, amt, itemname, weight
'1042' => 'Non hai quell\'oggetti nel tuo mezzo di trasporto.',
'1043' => 'Non hai così tanti %s nel tuo %s.', # itemname, mountname
'1044' => 'Aspetta %s prima di urlare ancora.',  # duration
'1045' => 'Più giocatori ti hanno sussurrato, quindi chiudo con questo messaggio.',
'1046' => 'Nessuno ti ha sussurrato negli ultimi %s.', # duration
'1047' => 'Devi imparare l\'alchimia prima.',
'1048' => 'Non hai quell\'incantesimo.',
'1049' => 'Non hai l\'incantesimo %s a quel dato livello.', # spellname
'1050' => 'Non hai un %s.',
'1051' => 'La preparazione della pozione è fallita e bottiglie e mandragora sono andati perduti.',
'1052' => 'L\'incantesimo "%s" funziona solo in combattimento.', # spellname
'1053' => 'Non puoi lanciare un incantesimo con un livello inferiore a 0.',
'1054' => 'Non puoi lanciare l\'incantesimo %s al livello %s perchè il livello del tuo incantesimo è solo %s.', # spellname, levelneed, levelhave 
'1055' => 'Ti servono %s MP per lanciare l\'incantesimo %s al livello %s, ma ne hai solo %s.', # needmp, spellname, level, #havemp
'1056' => 'Hai fallito il lancio dell\'incantesimo %s. %s MP sprecati.%s',
'1057' => 'L\'incantesimo %s, lanciato da %s, è fallito.', # spellname, player
'1058' => 'Non dovresti buttare quell\'oggetto.',
'1059' => 'Non puoi cambiare il tuo equipaggiamento in combattimento quando è bloccato.',
'1060' => 'Non puoi attaccare questo gruppo ancora. Aspetta %s.', # duration
'1061' => 'Divertente. Dai qualcosa a te stesso. Problema?',
'1062' => 'Specifica un numero positivo di nuyen.',
'1063' => 'Questo costerebbe %s ma tu hai solo %s.', # nuyen
'1064' => 'Questo giocatore non è nel tuo gruppo.',
'1065' => 'Puoi solo controllare remotamente gli NPC',
'1066' => 'Solo i seguenti comandi remoti sono disponibili: %s.', # rawlist
'1067' => 'Non hai un %s equipaggiato.', # type
'1068' => 'Stai già esplorando %s. ETA: %s.',
'1069' => 'La località è sconosciuta o ambigua.',
'1070' => 'Questa località non esiste in %s.',
'1071' => 'Sei già in %s.',
'1072' => 'Specifica un bersaglio a cui teleportarsi.',
'1073' => 'Questa città è sconosciuta.',
'1074' => 'Non puoi lanciare un incantesimo di teleport in questa località.',
'1075' => 'Non puoi teleportarti a %s perchè %s non ha il livello minimo di %s.',
'1076' => 'Occorre un incantesimo di %s al livello %s per teleportare %s membri del gruppo.',
'1077' => 'Ti servono %s MP per preparare questa pozione, ma ne hai solo %s.',
'1078' => 'Non puoi lanciare questo incantesimo dentro un sotterraneo.',
'1079' => 'Non puoi teleportarti nei sotterranei.',
'1080' => 'Non puoi muoverti poichè %s è morto.',
'1081' => 'Non puoi muoverti poichè %s è sovraccarico.',
'1082' => 'Non puoi muoverti poichè %s non ha #aslset.',
'1083' => 'Non puoi cacciare dei membri del tuo gruppo.',
'1084' => 'Non puoi cacciare %s perchè tu sei a %s e %s è a %s.',
'1085' => 'Non puoi unirti a gruppi di NPC.',
'1086' => 'Non puoi unirti al tuo stesso gruppo.',
'1087' => 'Il gruppo non vuole che tu ti unisca.',
'1088' => 'Il gruppo ha raggiunto il numero massimo di componenti, %d.',
'1089' => 'Questo giocatore non è nel tuo gruppo.',
'1090' => 'Non puoi cacciarti dal tuo stesso gruppo.',
'1091' => '%s è già il leader del gruppo.',
'1092' => 'Non puoi dare il comando del gruppo agli NPC.',
'1093' => 'Non sei in un gruppo.',
'1094' => 'Non dovresti usare questo comando per scambiare la posizione di leader. Utilizza il comando #(le)ader.',
'1095' => 'Sei già il leader del tuo gruppo.',
'1096' => 'Il tuo leader non consente di togliergli la leadership.',
'1097' => 'Aspetta %s e prova ancora.',
'1098' => 'Attualmente non ci sono nemici disponibili.',
'1099' => 'Non puoi fare questo mentre sei in un gruppo.',
'1100' => 'Non puoi permetterti di utilizzare la banca. Questo costa %s e tu hai solo %s disponibili.',
'1101' => 'Non hai quell\'oggetto in banca.',
'1102' => 'Non hai così tanti oggetti %s nella banca.', # itemname
'1103' => 'Non puoi depositare %s poichè hai con te solo %s.', # nuyen, nuyen
'1104' => 'Non puoi ritirare %s, perchè hai solo %s sul tuo account bancario.', # nuyen, nuyen
'1105' => 'Non ci sono negozi qui.',
'1106' => '%s non ha un negozio.', # player
'1107' => 'Il negozio di %s è vuoto.', # player
'1108' => 'Questo negozio non offre questo oggetto.',
'1109' => 'Il prezzo minimo per un oggetto è %s.',
'1110' => 'Il tuo prezzo è superiore al prezzo massimo.',
'1111' => 'Tutti gli slot del tuo bazaar sono in uso. Prova #ritira o #compraslot.',
'1112' => 'Non hai quell\'oggetto nel tuo bazaar.',
'1113' => 'Non hai così tanti %s nel tuo bazaar.',
'1114' => 'La commissione per ritirare %d oggetti dal tuo bazaar è %s, ma hai solo %s.',
'1115' => 'Non puoi comprare oggetti dal tuo negozio.',
'1116' => 'Hai cercato di comprare %d %s, ma il negozio ne ha solo %d.',
'1117' => 'Il tuo input eccede la lunghezza massima di %d caratteri.',
'1118' => 'Non puoi entrare in questa località.',
'1119' => 'Non puoi distruggere un clan quando ci sono ancora membri e non è ancora pulito.',
'1120' => 'Sei già nel clan "%s".',
'1121' => 'Il clan o il giocatore è sconosciuto.',
'1122' => 'Il clan ha raggiunto il limite dei membri, ovvero %d.',
'1123' => 'Hai già fatto richiesta di ammissione al clan, la tua vecchia richiesta è stata cancellata.',
'1124' => 'Non hai il permessi necessari.',
'1125' => '%s non ha richiesto di unirsi al tuo clan.',
'1126' => 'Il clan ha raggiunto il limite dei membri, ovvero %d. Puoi comprare nuovi slot per i membri tramite la funzione #gestisci.',
'1127' => 'Il tuo livello non è sufficiente per creare un clan. Il livello minimo è %s.',
'1128' => 'Il nome del tuo clan è troppo lungo o troppo corto.',
'1129' => 'Un clan con questo nome esiste già.',
'1130' => 'Il tuo slogan eccede la lunghezza massima di %d caratteri.',
'1131' => 'Vuoi ritirare %s(+%s)=%s dalla banca del clan, ma correntemente ce ne sono solo %s.',
'1132' => 'Provi a mettere nella banca del clan un altro %s, ma contiente già %s/%s.',
'1133' => 'Non hai quell\'oggetto nella banca del clan.',
'1134' => 'Non ci sono così tanti %s nella banca del clan.',
'1135' => 'In qualche modo, l\'ascensore ti sta precludendo questo piano.',
'1136' => 'Premi il bottone ma sei già al piano selezionato.',
'1137' => 'Non devi riposarti.',
'1138' => 'Il dottore dice: "Non ti serve il mio aiuto, fratello.',
'1139' => 'Il dottore scuote la testa: "No, amico mio. Curarti costerebbe %s ma hai solo %s."',
'1140' => 'Non c\'è un oggetto simile qui.',
'1141' => 'Hai giò un %s impiantato.',
'1142' => 'Non puoi impiantarti un %s. E\' in conflitto con %s.',
'1143' => 'Non hai abbastanza essenza(%s) per impiantarti un %s, che richiede %s punti di essenza.',
'1144' => 'Il dottore scuote la testa: "Amico mio, rimuovere questa dal tuo corpo costerebbe %s, ma hai solo %s."',
'1145' => 'Il tuo personaggio non può imparare %s.',
'1146' => 'Hai già imparato %s.',
'1147' => 'Ti serve %s per imparare questo incantesimo.',
'1148' => 'Non puoi cercare ancora.',
'1149' => 'Un membro del tuo party cerca di forzare la serratura senza successo.',
'1150' => 'L\'acquisto tramite ID è disabilitato qui, per via di possibili race conditions.',
'1151' => 'Non voglio il tuo %s.',
'1152' => 'Non ci sono treni in programma per oggi.',
'1153' => 'La destinazione è sconosciuto. Controlla la lista delle destinazioni con #viaggia.',
'1154' => 'Non puoi permetterti %d biglietti per %s.',
'1155' => 'Questo equipaggiamento non ha un uso particolare. Puoi equipaggiarlo con #equipaggia.',
'1156' => 'Hai già caricato la tua arma.',
'1157' => 'Questo oggetto funziona solo in combattimento.',
'1158' => 'Puoi solo forgiare dell\'equipaggiamento.',
'1159' => 'Puoi rompere solo oggetti migliorati.',
'1160' => 'Il secondo oggetto non è una runa.',
'1161' => 'La runa ha modificatori per equipaggiamento e per mezzo di trasporto. Devi dividerla prima.',
'1162' => 'Questa runa può essere applicata solo ai mezzi di trasporto.',
'1163' => 'Questa runa può essere applicata solo all\'equipaggiamento.',
'1164' => 'Utilizza "#mezzo pulisci" prima di cambiare mezzo.',
'1165' => 'La stringa dell\'oggetto diventerebbe troppo lunga con un altro modificatore.',
'1166' => 'Puoi solo dividere rune.',
'1167' => 'Questa runa ha un solo modificatore.',
'1168' => 'La runa si è rotta completamente mentre la dividevo. Non devi pagare.',
'1169' => 'Non puoi ricaricare un\'arma da mischia O.o',
'1170' => 'Il tuo gruppo non si sta muovendo.',
'1171' => 'Il tuo personaggio è già stato creato. Puoi usare #resetta per ripartire da capo.',
'1172' => 'La tua razza è sconosciuta o è una razza disponibile solo per gli NPC. Razze valide: %s.',
'1173' => 'Il tuo genere è sconosciuto. Generi validi: %s.',
'1174' => "Il comando non è disponibile per la tua corrente località. Utilizza {$c}c [<l|lunghi>] per vedere tutti i comandi attualmente disponibili.",
'1175' => 'E\' più di quanto ho, fratello',
//'1176' => '',
//'1177' => '',
//'1178' => '',
//'1179' => '',
//'1180' => '',

########################
# 10000-14999 = Spells #
########################
# Generic
'10000' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s.',
'10001' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s.',
'10002' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s.',
'10003' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s.',
# Berzerk
'10010' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s, +%5$s min_dmg / +%6$s max_dmg per %7$s.',
'10011' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s, +%5$s min_dmg / +%6$s max_dmg per %7$%s.',
'10012' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s.',
'10013' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s.',
# Blow
'10020' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s, che è stato sbalzato di %5$s ed è ora in posizione %6$s.',
'10021' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s, che è stato sbalzato di %5$s ed è ora in posizione %6$s.',
'10022' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s, che è stato sbalzato di %5$s ed è ora in posizione %6$s.',
'10023' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s, che è stato sbalzato di %5$s ed è ora in posizione %6$s.',
# Chameleon
'10030' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s, carisma +%5$s per %6$s.',
'10031' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s, carisma +%5$s per %6$s.',
'10032' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s.',
'10033' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s.',
# Firebolt
'10040' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s, causando %5$s punti danno.',
'10041' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s, causando %5$s punti danno.',
'10042' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s, causando %5$s punti danno, %6$s/%7$s HP left.',
'10043' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s, causando %5$s punti danno, %6$s/%7$s HP left.',
# Freeze
'10050' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s. Congelamento per %5$s secondi con potenza %6$01f.',
'10051' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s. Congelamento per %5$s secondi con potenza %6$01f.',
'10052' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s. Congelamento per %5$s secondi con potenza %6$01f.',
'10053' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s. Congelamento per %5$s secondi con potenza %6$01f.',
# Goliath
'10060' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s, forza +%5$s per %6$s.',
'10061' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s, forza +%5$s per %6$s.',
'10062' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s.',
'10063' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s.',
# Hawkeye
'10070' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s, armi da fuoco +%5$s per %6$s.',
'10071' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s, armi da fuoco +%5$s per %6$s.',
'10072' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s.',
'10073' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s.',
# Hummingbird
'10080' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s, velocità +%5$s per %6$s.',
'10081' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s, velocità +%5$s per %6$s.',
'10082' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s.',
'10083' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s.',
# Magicarp
'10090' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s ed hanno perso %5$s MP.',
'10091' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s, +%5$s ed hanno perso %6$s MP.',
'10092' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s ed hanno perso %5$s MP.',
'10093' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s ed hanno perso %5$s MP.',
# Turtle
'10100' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s, marm/farm +%5$s per %6$s.',
'10101' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s, marm/farm +%5$s per %5$s.',
'10102' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s.',
'10103' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s.',
# Heal
'10110' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s, %s.',
'10111' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s, %s.',
'10112' => '%1$s usa una pozione di %3$s, di livello %2$s, su %4$s.',
'10113' => '%1$s lancia un incantesimo %3$s, di livello %2$s, su %4$s.',
# Calm
'10120' => '%1$s uses a level %2$s %3$s potion on %4$s. +%5$sHP for %6$s seconds.',
'10121' => '%1$s casts a level %2$s %3$s on %4$s. +%5$sHP for %6$s seconds.',
'10122' => '%1$s uses a level %2$s %3$s potion on %4$s.',
'10123' => '%1$s casts a level %2$s %3$s on %4$s.',

############################
#   5000-9999   = Messages #
############################
'5000' => '%s ha chiuso il suo server IRC.', # username 
'5001' => 'Ti svegli e gusti una colazione deliziosa.',
'5002' => 'Sei pronto a partire.',
'5003' => 'Il gruppo è avanzato al livello %s.', # level
'5004' => 'I tuoi attributi: %s.', # statlist
'5005' => 'Inventario',
'5006' => 'Le tue abilità: %s.', # statlist
'5007' => 'Posti Conosciuti a %s: %s.', # cityname, places
'5008' => 'Il tuo gruppo ha %s: %s.', # nuyen sum, party sum list
'5009' => 'Statistiche quest per la città: %s.', # questlist
'5010' => 'Statistiche quest: %d aperte, %d compiute, %d rifiutate, %d fallite, %d sconosciute di un totale di %d.',
'5011' => '%d: %s - %s (%s)', # questid, questname, describtion, status
'5012' => 'Il tuo asl: %s. Usa #asl [<eta|peso|altezza>] per la somma su tutto il gruppo.',
'5013' => 'Il %s(%s) del tuo gruppo: %s.', # field, total, sumlist
# Gender Race L(LL), HP/HPP MP/MPP, ATK, DEF, DMG-DDMG, MARM/FARM, XP, Karma, NY, WEIGHT/WWEIGHT
# Status with magic
'5014' => "%s %s L%s(%s). {$b}HP{$b}:%s/%s, {$b}MP{$b}:%s/%s, {$b}Att{$b}:%s, {$b}Dif{$b}:%s, {$b}Dmg{$b}:%s-%s, {$b}Arm{$b}(M/F):%s/%s, {$b}XP{$b}:%.02f, {$b}Karma{$b}:%s, {$b}¥{$b}:%.02f, {$b}Peso{$b}:%s/%s.",
# Status without magic
'5015' => "%s %s L%s(%s). {$b}HP{$b}:%s/%s, {$b}Att{$b}:%s, {$b}Dif{$b}:%s, {$b}Dmg{$b}:%s-%s, {$b}Arm{$b}(M/F):%s/%s, {$b}XP{$b}:%.02f, {$b}Karma{$b}:%s, {$b}¥{$b}:%.02f, {$b}Peso{$b}:%s/%s.",
# Party status
'5016' => 'Stai %s', # action
'5017' => 'Stai conducendo i %d membri (%s) del tuo gruppo e stai %s', # membercount, memberlist, action
'5018' => 'Il tuo gruppo (%s) sta %s', # memberlist, action
'5019' => 'Vecchio messaggio: %s', # message
'5020' => 'Esci dal %s.', # location
'5021' => 'Senti il suono dell\'allarme!',
'5022' => 'Il tuo tentativo di hacking è fallito.',
'5023' => 'La tua richiesta di accettazione è stata inviato al leader del clan.',
'5024' => 'Il bersaglio per lo svaligiamento (%s) se ne è andato.', # target
'5025' => '%s ha lasciato %s.', # target, location
'5026' => '%s è ora nel tuo gruppo.', # target
'5027' => 'Hai esplorato %s nuovamente, ma sembra che tu ne conosca anche l\'angolo più recondito.', # cityname
'5028' => 'Hai esplorato %s nuovamente, ma non hai trovato nulla di nuovo.', # cityname
'5029' => '%s', # location found text
'5030' => '%s', # inngame help message
'5031' => 'Hai perso il tuo bersaglio e continui a girovagare nelle strade di %s.', # cityname
'5032' => 'Hai trovato %s nel %s con un gruppo di %s membri.', # target, location, membercount
'5033' => 'Hai trovato %s nelle strade di %s.', # target, cityname
'5034' => "Hai reclamato una {$b}taglia{$b}: %s.", # nuyen
'5035' => '%s sono stati riservati sul tuo conto corrente per la vendita di %s %s a %s.', # nuyen, amt, item, player
'5036' => 'Il tuo personaggio è stato punito con %.02f bad_karma.', # bad karma
'5037' => 'Comandi nascosti: %s.', # cmdlist
'5038' => 'Il gicoatore %s attualmente non appartiene ad alcun clan.', # player
'5039' => '%s è nel clan "%s" con %s/%s membri, ricchezza %s/%s e %s/%s oggetti in banca. Il loro motto: %s',
'5040' => '%d Membri del Clan, pagina%d/%d: %s.', # membercount, page, npages, sumlist
'5041' => 'Storia del Clan, page %d/%d: %s.', # page, npages, weird msglist
'5042' => 'Comandi: %s.',
'5043' => '%s', # Compare table messages, 3 rows
'5044' => '%s', # Unknown table messages, multiple rows
'5045' => 'Il tuo cyberware: %s.', # itemlist
'5046' => 'Hai sicuramente dimenticato %s "%s".', # section, knowledge
'5047' => 'I tuoi effetti: %s.', # effectlist
'5048' => 'Il tuo equipaggiamento: %s.', # equipstring
'5049' => '%s', # examine string
'5050' => 'Gli HP del tuo gruppo: %s.', # HP/MP string
'5051' => 'Gli MP del tuo gruppo: %s.', # HP/MP string
'5052' => 'Il tuo gruppo ha %s punti karma: %s.', # total, sumlist
'5053' => 'Le tue conoscenze: %s.', # statlist
'5054' => 'Incantesimi conosciuti: %s.', # spellfmtlist
'5055' => 'Parole conosciute: %s.', # #rawitemlist
'5056' => 'Il tuo gruppo ha un livello %s(%s/%s): %s.', # total level, xp , need xp, sumlist
'5057' => 'Abilità da migliorare: %s.', # lvlupstring
'5058' => 'Attributi da migliorare: %s.', # lvlupstring
'5059' => 'Conoscenze da migliorare: %s.', # lvlupstring
'5060' => 'Incantesimi da migliorare: %s.', # lvlupstring
'5061' => 'Hai usato %d punti karma ed aumentato il livello di %s da %d a %d.', # karma, field, from, to
'5062' => "{$b}%s{$b} ti mostra: %s.", # player, examinestring
'5063' => 'Gli oggetti %s e %s sono stati scambiati.', # itemname, itemname
'5064' => 'Il tuo gruppo trasporta %s: %s.', # total weight, sumlist
'5065' => 'Il tuo gruppo non accetta più nuovi membri.',
'5066' => 'Il tuo gruppo non accetta ancora nuovi membri.',
'5067' => '%s è stato cacciato dal gruppo.',
'5068' => '%s può ora unirsi nuovamento al tuo gruppo.',
'5069' => '%s quest, pagina %d/%d: %s.',
'5070' => 'L\'opzione %s è già stata %s.', # option, en/disabled
'5071' => 'L\'opzione %s è già stata %s per il tuo personaggio.', # option, en/disabled
'5072' => 'Il tuo tipo di messaggio Shadowlamb è stato già impostato a %s.', # notice|privmsg
'5073' => 'Il tuo tipo di messaggio Shadowlamb è stato impostato a %s.', # notice|privmsg
'5074' => 'Questo è un test.',
'5075' => 'Stai già utilizzando la modalità corsa. Grande!',
'5076' => 'Digita "%s" per confermare.',
'5077' => 'Ora stai giocando in modalità corsa. Questo significa che non hai limite per le tue statistiche ma, se morirai, la morte sarà definitiva. Buona fortuna, ne avrai bisogno!',
'5078' => 'Ti consigliamo anche di #enable norl (attivare norl) ora, per evitare che il tuo personaggio possa essere rapito con il comando #rl!',
'5079' => 'L\'inventario del tuo mezzo di trasporto %s/%s: %s.', # page, pages, itemlist
'5080' => 'Hai riposto %d dei tuoi %s nel tuo %s.', # amt, itemname, mountname
'5081' => 'Hai preso %d %s dal tuo %s e li hai messi nel tuo inventario(ID: %d).', # amt, itemname, mountname, invid
'5082' => 'Hai ripulito il tuo mezzo di trasposto dalle cose che conteneva.',
'5083' => 'Mezzi di traposto del gruppo (%s/%s): %s.', # storage, max storage, sumlist
'5084' => "{$b}%s{$b} pm: \"%s\"", # player, message
'5085' => "{$b}%s{$b} dice: \"%s\"", # player, message
'5086' => "{$b}%s{$b} sussurra: \"%s\"", # player, message
'5087' => '%s', # bounties
'5088' => '%s', # own bounty
'5089' => '%s', # other bounty
'5090' => '%s si muove di %.01f metri %s ed è ora in posizione %.01f meters%s', # player, fw/bw, metres, busy (OWN)
'5091' => '%s si muove di %.01f metri %s ed è ora in posizione %.01f meters%s', # player, fw/bw, metres, busy (ENEMY)
'5092' => 'Il gruppo nemico ha detto "Addio".',
'5093' => 'Stai nuovamente %s.', # action
'5094' => '%s ti ha ringraziato ed ha lasciato il gruppo.', # player
'5095' => 'Hai incontrato %s.',
'5096' => 'Hai incrociato %s.%s%s',
'5097' => '%s si muove di %.01f metri verso %s ed è ora in posizione %.01f metri. Occupato per %ds.',
'5098' => '%s si muove di %.01f metri verso %s ed è ora in posizione %.01f metri.',
'5105' => 'Hai saccheggiato %s e %s XP.', # nuyen, XP
'5110' => 'Stai per buttare %d %s. Ridigita per confermare.', # amt itemname
'5111' => 'Ti sei liberato di %d %s.',
'5112' => '%s ha provato a fuggire dal combattimento. Occupato per %s.', #player, duration
'5113' => '%s è fuggito dal nemico.', # player
'5114' => '%s è fuggito dal combattimento.', # player
'5115' => 'Hai dato %d %s a %s.%s', # amt, item, player, busytime
'5116' => '%s ha ricevuto %s da %s.', # player, itemlist, source
'5117' => '%s ha detto %s a proposito di %s.', # player, player, knowledge
'5118' => 'Hai ricevuto %s da %s.', # itemname, player
'5119' => 'Hai dato %s a %s.', # itemname, player
'5120' => 'Non vedi altri giocatori.',
'5121' => 'Nelle vicinanze scorgi i seguenti giocatori: %s.', # sumlist?
'5122' => 'La tua distanza di default in combattimento è stata impostata a %.01f metri.', # distance
'5123' => 'Distanze: %s.', # sumlist
'5124' => 'Distanze: %s.', # sumlist
'5125' => 'Hai ricevuto una ricompensa di %s per aver ucciso un nemico.', # nuyen
'5126' => 'Inizi ad esplorare %s. ETA: %s.', # cityname, duration
'5127' => 'Stai andando a %s. ETA: %s.', # location, duration
'5128' => 'Non vedi alcun mezzo di trasporto altrui da cui poter rubare.',
'5129' => '%s', # Mount page
'5130' => 'Mezzi di trasporto da svaligiare: %s.', # sumlist
'5133' => '%s ha usato %s MP per lanciare l\'incantesimo %s ed il tuo gruppo è ora al di fuori di %s.', # player, mp, teleportspellname, location 
'5134' => 'Cominci a cacciare %s. ETA: %s.', # player, duration
'5135' => '%s ha lasciato il gruppo.', # player
'5136' => '%s si è unito al gruppo.', # player
'5137' => '%s è stato cacciato dal gruppo.', # player
'5138' => '%s è il nuovo leader del gruppo.', # player
'5139' => "Il gruppo ha impostato la sua modalità di saccheggiamento a: {$b}%s{$b}.", # lootmode
'5140' => '%s e %s hanno scambiato la loro posizione nel gruppo.', # player, player
'5141' => 'Sei portato nell\'arena e vedi il tuo nemico: %s.', # snippet
'5142' => '%s', # generic bank viewi.
'5143' => 'Paghi %s nuyen.', # nuyen
'5144' => 'Hai messo %d dei tuoi %s nel tuoi account di banca. Ora trasporti %s/%s.', # amount, item, weight, maxweight
'5145' => 'Hai rimosso %d %s dal tuo account bancario e li hai messi nel tuo inventario. Ora trasporti %s/%s.', # amount, item, weight, maxweight
'5146' => 'Trasporti %s. Nella tua banca ci sono %s. Ogni transazione costa %s.', # nuyen, nuyen. cost
'5147' => 'Depositi %s nel tuo account bancario (ora %s) e tieni %s nel tuo inventario.', # nuyen, nuyen, nuyen
'5148' => 'Ritiri %s dal tuo account bancario (%s rimasti) e mantieni %s.', # nuyen, nuyen, nuyen
'5149' => 'Negozi, pagina %d/%d: %s.',
'5150' => 'Negozio di %s: "%s"', # player, bazar slogan
'5151' => '%d oggetti: %s.', # # itemcount, bazaritemlist
'5152' => "%s vende un %3\$s, da un totale di %2\$d, per {$b}%4\$s{$b}. Digita {$b}#compra %1\$s %3\$s{$b} per comprare.", # player, itemcount, itemname, nuyen, examinestring
'5153' => 'Da ora offri %d %s nel tuo bazaar, ad un prezzo di %s ciascuno.', # amount, itemname, price
'5154' => 'Paghi la commissione di %s e rimuovi %d %s dal tuo bazaar e li metti nel tuo inventario.', # price, amount, itemname
'5155' => 'Cerchi di comprare %d %s da %s per %s. Ridigita per confermare.', # amount, itemname, player, price
'5156' => '%s ha comprato %d %s dal bazaar di %s.', # player, amount, itemname, player
'5157' => 'Attualmente hai %d di %d slot per il tuo bazaar utilizzati. Un altro slot ti costerebbe %s. Digita "#compraslot sissignore" per confermare.',
'5158' => 'Paghi la commissione di %s ed ora hai %s slot per il tuo bazaar.', # nuyen, slotcount
'5159' => 'Il tuo slogan è stato impostato a: "%s".', # slogan
'5160' => 'Oggetti corrispondenti nel bazaar, pagina %d/%d: %s.', # page, npages, bazaar searchlist
'5161' => 'Volevi comprare %d %s, ma ne hai trovati solo %d.', # amount, itemname, amount
'5162' => 'Vuoi pagare %s per %d %s, ma il prezzo migliore è %s.', # price, amount, itemname, price
'5163' => 'Stai per comprare %d %s, per un totale di %s. Ridigita il comando per confermare.', # amount, itemname, price
'5164' => 'Hai comprato %d %s, per un total di %s.',
'5165' => 'Hai lasciato il clan "%s".',
'5166' => '%s ha accettato la tua richiesta di ammissione per il clan %s.',
'5167' => 'Richieste di ammissione al clan, pagina %d/%d: %s.',
'5168' => 'Congratulazioni. Hai formato un nuovo clan dal nome"%s".',
'5169' => 'Hai pagato la commissione di %s ed impostato un nuovo slogan per il tuo clan.',
'5170' => 'Il tuo clan può depositare %s. Un altro %s ti costerebbe %s. Digita "%s" pe confermare.',
'5171' => 'Il tuo clan ha già raggiunto il massimo di %s/%s.',
'5172' => 'Hai pagato %s ed ora il tuo clan può depositare %s/%s.',
'5173' => 'Paghi la commissione di %s, depositando %s nella banca del clan, che ora contiene %s/%s.',
'5174' => 'Paghi la commissione di %s, ritirando %s dalla banca del clan, che ora contiene%s/%s.',
'5175' => 'L\'opzione %s del tuo clan è stata %s.',
'5176' => 'Banca del clan, pagina %d/%d: %s.',
'5177' => 'Il tuo gruppo schiaccia il bottone "%s" e l\'ascensore inizia a muoversi.',
'5178' => 'Sei su %s, al piano %s. Piani accessibili: %s.',
'5179' => 'Il dottore prendi i tuoi %s e ti cura.',
'5180' => 'Hai pagato %s e ti è stato impiantato un %s.',
'5181' => 'Paghi %s ed il %s ti è stato rimosso.',
'5182' => "Il gruppo va a dormire. Ti dirigi alla {$b}tua{$b} stanza.",
'5183' => 'Corsi disponibili: %s.',
'5184' => 'Pagando %s hai imparato %s.',
'5185' => 'Cerchi nel %s...',
'5186' => 'Hai cercato nel %s ma non hai trovato nulla.',
'5187' => '%s ha forzato la serratura!',
'5188' => '%s', # Store item list fmt_sumlist
'5189' => '%s', # Store item examine string
'5190' => 'Hai pagato %s per comprare %s. ID inventario: %d.', # nuyen, itemname, invid
'5191' => 'Hai venduto %d dei tuoi %s per %s. Ora trasporti %s/%s.', # amount, itemname, nuyen, weight, maxweight
'5192' => 'Cerci di rubare %s...', # itemname
'5193' => 'Sei stato fortunato e sei riuscito a rubare %s.',
'5194' => 'Non riesci a trovare il momento giusto per rubare qualcosa.',
'5195' => 'Sei stato sfortunato... il padrone del negozio ha attivato l\'allarme silenzioso; è arrivata la polizia e sei stato messo nella prigione di Delaware.',
'5196' => 'Sei stato sfortunato... il padrone del negozio ha attivato l\'allarme silenzioso...',
'5197' => 'Il padrone del negozio ti sta osservando... meglio aspettare qualche minuto.',
'5198' => 'Il venditore sorride e mette l\'oggetto in vetrina.',
'5199' => 'Treni: %s.', # target fmt_sumlist
'5200' => '%s ha pagato il prezzo di %s ed ora puoi prendere il treno per %s. ETA: %s.', # player, nuyen, target, eta
'5201' => '%s ha consumato un oggetto: %s. Occupato per %s secondi.', # player, itemname, busytime
'5202' => 'Obbiettivi possibili: %s.', # Computer target list fmt_rawitems.
'5203' => 'Hai messo il tuo %s nel tuo inventario, occupato per %s secondi.', # itemname, busytime
'5204' => 'D\'ora in poi utilizzerai %s, occupato per %d secondi.', # itemname, busytime
'5205' => 'Non hai più munizioni!',
'5206' => '%s carica %d proiettili nel suo %s. Occupato per %s secondi.', # player, amount, itemname, busytime
'5207' => 'Carichi %d proiettili nel tuo %s.', # amount, itemname
'5208' => 'Paghi %s ed il fabbro ripulisc il %s da tutte le sue rune. Ricevi: %s.', # price, itemname, itemname
'5209' => 'Paghi %s e rompi il %s in %s.', # price, itemname, rawlist
'5210' => 'Paghi %s ma l\'operazione di rottura di %s in rune è fallita.', # price, itemname
'5211' => 'Il fabbro esamina i tuoi oggetti... "Ti costerebbe %s per migliorare il tuo %s con la runa %s. La possibilità di fallire è %.02f%% e la possibilità di rompere l\'oggetto è %.02f%%. Ridigita il comando per confermare.',
'5212' => 'Il fabbro prende i tuoi oggetti e va a lavorare...',
'5213' => 'Il miglioramento è fallito miseramente: hai perso sia l\'oggetto che le rune. Il fabbro è molto dispiaciuto e, per questo, non ti fa pagare nulla.',
'5214' => 'Il miglioramento è fallito e la runa è andata persa. Devi solo pagare %s per il lavoro.',
'5215' => 'Il miglioramento è avenuto con successo. Paghi %s ed il fabbro ti restituisce un meraviglioso %s.',
'5216' => 'Ti verrebbe a costare %s per dividere %s. Ridigita il comando per confermare.',
'5217' => 'Paghi %s e dividi la runa %s in %s.',
'5218' => 'Inizi a forzare la serratura sulla %2$s di %1$s. Penelità temporale: %3$s.',
'5219' => "%s sta cercando di {$b}forzare la serratura{$b} sul tuo %s!",
'5220' => 'Hai fallito a forzare la serratura sulla %2$s di %1$s.',
'5221' => 'Hai finito di forzare la serratura del bersaglio.',
'5222' => '"Hey, cosa stai facendo!!!" ... Ti accorgi dll\'ufficiale di polizia che si avvicina!',
'5223' => 'Hai forzato con successo la serratura sulla %2$s di %$1s ma quest\'ultima sembra vuota.',
'5224' => 'Hai forzato con successo la serratura sulla %2$s di %$1s.',
'5225' => '%s è riuscito a forzare la serratura sulla tua %s!',
'5226' => 'All\'ultimo secondo vedi dei soldati che si avvicinano e decidi di fermarti per un momento.',
'5227' => '%s ha rubato %dx%s dal tuo %s.',
'5228' => '%s ha usato %s su %s. %s%s', # player, itemname, player, busy, appendmsg # (friend)
'5229' => '%s ha usato %s su %s. %s', # player, itemname, player, appendmsg # (foe)
'5230' => '%s attacca %s con %s ma manca clamorosamente. Occupato per %s secondi.',
'5231' => '%s attacca %s con %s ma non causa alcun danno. Occupato per %s secondi.',
'5232' => '%1$s attacca %2$s con %3$s causando %6$s%4$s punti danno%6$s. Occupato per %5$s secondi.',
'5233' => '%1$s attacca %2$s con %3$s causando %8$s%4$s punti danno%8$s, %5$s/%6$sHP rimasti. Occupato per %7$s secondi.',
'5234' => '%1$s attacca %2$s con %3$s uccidendolo, avendo causato %8$s%4$s punti danno%8$s. Occupato per %5$s secondi. Ricevi %6$s e %7$sXP.',
'5235' => '%1$s attacca %2$s con %3$s uccidendolo, avendo causato %6$s%4$s punti danno%6$s. Occupato per %5$s secondi.',
'5236' => 'Hai ricevuto una nuova quest: %s.',
'5237' => 'Hai declinato la quest "%s", per sempre.',
'5238' => 'Hai completato una quest: %s.',
'5239' => 'Dai %d %s a %s.',
'5240' => 'Hai ricevuto %s.', # quest reward string
'5241' => 'In Shadowlamb v3 ci sono: %s NPC differenti in %s Aree con %s Località. %s Oggetti, %s Incantesimi e %s Quest. Prova #stats per vedere quante persone stanno giocando al momento.',
'5242' => 'Il gruppo si è fermato. Cosa facciamo ora?!',
'5243' => 'L\'anno è il 2064 + %s.',
'5244' => 'Al momento ci sono %s Umani, %s NPC e %s gruppi in memoria.',
'5245' => 'Il tuo personaggio è stato cancellato. Puoi utilizzare "#inizia" nuovamente.',
'5246' => 'Questo cancellerà completamente il tuo personaggio. Digita "#resetta son_sicuro" per confermare.',
'5247' => 'Giocatori attivi, pagina %d di %d: %s.', # page, nPages, rawlist
'5248' => 'Gruppi attivi, pagina %s di %s: %s.', # page, nPages, rawlist
'5249' => 'Messaggio del giorno: %s', # file content
'5250' => 'Conosci qualcosa di nuovo su %s: %s.', # knowledge, what, field
'5251' => "Ora hai {$b}%d(+%d) karma{$b}. Con il karma puoi #lvlup (salire di livello).", # karma, karmagain
'5252' => 'Risorgi a %s.', # location
'5253' => 'Hai perso %s XP!', # xp
'5254' => 'Hai perso %s!', # nuyen
'5255' => 'Hai perso %d dei tuoi %s.',
'5256' => 'Stavi giocando in #modalità_corsa e sei stato ucciso da un NPC o da un altro giocatore #rm. Sei morto. Usa #resetta per ricominciare.',
'5257' => '%s', # Arrive city message.
'5258' => '%s', # clan message
'5259' => 'Treni: %s.', # Travel target list fmt_sumlist.
'5260' => 'Hai guadagnato +%s MP (%s/%s).', # From orcas effect
'5261' => 'Hai guadagnato +%s HP (%s/%s).', # From elpehants effect
);
?>
