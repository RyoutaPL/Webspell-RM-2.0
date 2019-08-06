<?php
/*¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯\
| _    _  ___  ___  ___  ___  ___  __    __      ___   __  __       |
|( \/\/ )(  _)(  ,)/ __)(  ,\(  _)(  )  (  )    (  ,) (  \/  )      |
| \    /  ) _) ) ,\\__ \ ) _/ ) _) )(__  )(__    )  \  )    (       |
|  \/\/  (___)(___/(___/(_)  (___)(____)(____)  (_)\_)(_/\/\_)      |
|                       ___          ___                            |
|                      |__ \        / _ \                           |
|                         ) |      | | | |                          |
|                        / /       | | | |                          |
|                       / /_   _   | |_| |                          |
|                      |____| (_)   \___/                           |
\___________________________________________________________________/
/                                                                   \
|        Copyright 2005-2018 by webspell.org / webspell.info        |
|        Copyright 2018-2019 by webspell-rm.de                      |
|                                                                   |
|        - Script runs under the GNU GENERAL PUBLIC LICENCE         |
|        - It's NOT allowed to remove this copyright-tag            |
|        - http://www.fsf.org/licensing/licenses/gpl.html           |
|                                                                   |
|               Code based on WebSPELL Clanpackage                  |
|                 (Michael Gruber - webspell.at)                    |
\___________________________________________________________________/
/                                                                   \
|                     WEBSPELL RM Version 2.0                       |
|           For Support, Mods and the Full Script visit             |
|                       webspell-rm.de                              |
\__________________________________________________________________*/

$language_array = Array(

/* do not edit above this line */

  'access_denied'=>'Zugriff verweigert',
  'activated'=>'Aktiviert',
  'additional_options'=>'Frontend (Website) deaktivieren',
  'admin_email'=>'Admin E-Mail',
  'admin_name'=>'Admin Name',
  'allow_usergalleries'=>'Benutzer-Galerien erlauben',
  'archive'=>'Archiv',
  'articles'=>'Artikel',
  'autoresize'=>'Größenanpassung Inhalt',
  'autoresize_js'=>'per JavaScript',
  'autoresize_off'=>'deaktiviert',
  'autoresize_php'=>'per PHP',
  'awards'=>'Auszeichnungen',
  'captcha'=>'Captcha',
  'captcha_autodetect'=>'automatisch',
  'captcha_bgcol'=>'Hintergrundfarbe',
  'captcha_both'=>'beides',
  'captcha_fontcol'=>'Schriftfarbe',
  'captcha_image'=>'Bild',
  'captcha_linenoise'=>'Linien Störung',
  'captcha_noise'=>'Störung',
  'captcha_only_math'=>'nur Mathe',
  'captcha_only_text'=>'nur Text',
  'captcha_text'=>'Text',
  'captcha_type'=>'Captcha Typ',
  'captcha_style'=>'Captcha Stil',
  'clan_name'=>'Clan Name',
  'clan_tag'=>'Clan Tag',
  'clanwars'=>'Clanwars',
  'comments'=>'Kommentare',
  'content_size'=>'Inhaltsgröße',
  'deactivated'=>'deaktiviert',
  'default_language'=>'Standardsprache',
  'demos'=>'Demos',
  'demos_top'=>'Top 5 Demos',
  'demos_latest'=>'Letzte 5 Demos',
  'detect_visitor_language'=>'Besuchersprache erkennen?',
  'forum'=>'Forum',
  'forum_posts'=>'Forumbeiträge',
  'forum_topics'=>'Forumthemen',
  'format_date'=>'Datumsformat',
  'format_time'=>'Zeitformat',
  'files'=>'Dateien',
  'files_top'=>'Top 5 Downloads',
  'files_latest'=>'Letzte 5 Downloads',
  'gallery'=>'Galerie',
  'guestbook'=>'Gästebuch',
  'headlines'=>'letzte Neuigkeiten',
  'insert_links'=>'Mitgliederlinks einfügen',
  'latest_articles'=>'letzte Artikel',
  'latest_results'=>'letzte Resultate',
  'latest_topics'=>'letzte Themen',
  'login_duration'=>'Anmeldungsdauer',
  'max_length_headlines'=>'max. Länge letzte Neuigkeiten',
  'max_length_latest_articles'=>'max. Länge letzte Artikel',
  'max_length_latest_topics'=>'max. Länge letzte Themen',
  'max_length_topnews'=>'max. Länge Top Neuigkeiten',
  'max_wrong_pw'=>'max. falsche Passwörter',
  'messenger'=>'Nachrichtensystem',
  'msg_on_gb_entry'=>'PN nach GB Eintrag',
  'news'=>'Neuigkeiten',
  'other'=>'Sonstiges',
  'page_title'=>'Homepage Titel',
  'page_url'=>'Homepage URL',
  'pagelock'=>'Seite sperren',
  'pictures'=>'Bilder',
  'profile_last_posts'=>'letzte Beiträge im Profil',
  'public_admin'=>'öffentliche Administration',
  'registered_users'=>'registrierte Benutzer',
  'register_per_ip'=>'Registrierung mit gleicher IP?',
  'search_min_length'=>'min. Länge der Suche',
  'settings'=>'Einstellungen',
  'shoutbox'=>'Shoutbox',
  'shoutbox_all_messages'=>'Shoutbox alle Einträge',
  'shoutbox_refresh'=>'Shoutbox neuladen',
  'space_user'=>'Speicherplatz pro Benutzer (MByte)',
  'spam_check'=>'Beiträge validieren?',
  'spamapiblockerror'=>'Beiträge blockieren?',
  'spamapihost'=>'API URL',
  'spamapikey'=>'API Schlüssel',
  'spamfilter'=>'Spam Filter',
  'spammaxposts'=>'Max. Beiträge',
  'sc_modules'=>'SC Module',
  'thumb_width'=>'Breite Bildvorschau',
  'tooltip_1'=>'Dies ist die URL der Seite, z.B. (deinedomain.de/pfad/webspell).<br>Ohne http:// am Anfang und nicht mit Slash enden!<br>Sollte etwas sein wie',
  'tooltip_2'=>'Das ist der Titel der Seite, wird auch als Browser Titel angezeigt',
  'tooltip_3'=>'Der Name der Organisation',
  'tooltip_4'=>'Das Kürzel der Organisation',
  'tooltip_5'=>'Dein Name',
  'tooltip_6'=>'Die E-Mail Adresse des Webmasters',
  'tooltip_7'=>'Maximale Neuigkeiten, welche komplett angezeigt werden',
  'tooltip_8'=>'Forumthemen pro Seite',
  'tooltip_9'=>'Bilder pro Seite',
  'tooltip_10'=>'Neuigkeiten im Archiv pro Seite',
  'tooltip_11'=>'Forumbeiträge pro Seite',
  'tooltip_12'=>'Größe (Breite) für Galerie Vorschaubilder',
  'tooltip_13'=>'Letzte Neuigkeiten aufgelistet in sc_headlines',
  'tooltip_14'=>'Forumthemen aufgelistet in latesttopics',
  'tooltip_15'=>'Speicherplatz für Benutzer-Galerien pro Benutzer in MByte',
  'tooltip_16'=>'Maximale Länge für die letzten Neuigkeiten in sc_headlines',
  'tooltip_17'=>'Minimale Länge von Suchbegriffen',
  'tooltip_18'=>'Möchtest du Benutzer-Galerien für jeden Benutzer erlauben?',
  'tooltip_19'=>'Möchtest du Galerie Bilder direkt auf deiner Page administrieren? (besser ausgewählt lassen)',
  'tooltip_20'=>'Artikel pro Seite',
  'tooltip_21'=>'Auszeichnungen pro Seite',
  'tooltip_22'=>'Artikel aufgelistet in sc_articles',
  'tooltip_23'=>'Demos pro Seite',
  'tooltip_24'=>'Maximale Länge der aufgelisteten Artikel in sc_articles',
  'tooltip_25'=>'Gästebucheinträge pro Seite',
  'tooltip_26'=>'Kommentare pro Seite',
  'tooltip_27'=>'Private Nachrichten pro Seite',
  'tooltip_28'=>'Clanwars pro Seite',
  'tooltip_29'=>'Registrierte Benutzer pro Seite',
  'tooltip_30'=>'Resultate aufgelistet in sc_results',
  'tooltip_31'=>'Letzte Beiträge aufgelistet im Profil',
  'tooltip_32'=>'Geplante Einträge aufgelistet in sc_upcoming',
  'tooltip_33'=>'Anmeldungsdauer [in Stunden] (0 = 20 Minuten)',
  'tooltip_34'=>'Maximale Größe (Breite) für den Inhalt (Bilder, Textfelder usw.) (0 = deaktiviert)',
  'tooltip_35'=>'Maximale Größe (Höhe) für Bilder (0 = deaktiviert)',
  'tooltip_36'=>'Sollen Feedback-Admins eine Nachricht bei einem neuen Gästebuch Eintrag bekommen?',
  'tooltip_37'=>'Shoutboxkommentare, welche in der Shoutbox angezeigt werden',
  'tooltip_38'=>'Maximal gespeicherte Kommentare in der Shoutbox',
  'tooltip_39'=>'Dauer (in Sekunden) für das Nachladen der Shoutbox',
  'tooltip_40'=>'Standardsprache für die Seite',
  'tooltip_41'=>'Sollen die Links zu den Member Profilen automatisch gesetzt werden?',
  'tooltip_42'=>'Maximale Länge für die letzten Themen in latesttopics',
  'tooltip_43'=>'Maximale Anzahl falscher Password Eingaben vor IP Ban',
  'tooltip_44'=>'Anzeigeart des Captchas',
  'tooltip_45'=>'Hintergrundfarbe des Captchas',
  'tooltip_46'=>'Schriftfarbe des Captchas',
  'tooltip_47'=>'Art des Captchas',
  'tooltip_48'=>'Anzahl der Störungen',
  'tooltip_49'=>'Anzahl der Störungslinien',
  'tooltip_50'=>'Auswahl der automatischen Inhaltsgrößenanpassung',
  'tooltip_51'=>'Maximale Länge für die Top Neuigkeiten in sc_topnews',
  'tooltip_52'=>'Sprache des Besuchers automatisch erkennen',
  'tooltip_53'=>'Beiträge mit externer Datenbank validieren',
  'tooltip_54'=>'Tragen Sie hier ihren Spam API-Schlüssel ein wenn vorhanden',
  'tooltip_55'=>'Tragen Sie hier die URL zum API Host Server ein.<br>Standard: https://api.webspell.org',
  'tooltip_56'=>'Anzahl Beiträge ab wann nicht mehr mit externer Datenbank validiert wird',
  'tooltip_57'=>'Sollen die Beiträge bei einem Fehler blockiert werden?',
  'tooltip_58'=>'Ausgabeformat des Datums',
  'tooltip_59'=>'Ausgabeformat der Zeit',
  'tooltip_60'=>'Benutzer Gästebücher auf der Seite aktivieren?',
  'tooltip_61'=>'Was soll das SC Demos Modul anzeigen?',
  'tooltip_62'=>'Was soll das SC Dateien Modul anzeigen?',
  'tooltip_63'=>'Registrierung mit gleicher IP Adresse blockieren?',
  'transaction_invalid'=>'Transaktions ID ungültig',
  'upcoming_actions'=>'Kommende Aktionen',
  'update'=>'aktualisieren',
  'activate' => 'Aktiviert',
  'important_text' => 'Bevor Du diese Modifikation aktivierst benötigst Du die reCaptcha APi-Keys. <br />Dazu gehe wiefolgt vor.<br /><br />1. <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank">reCaptcha Account</a> anlegen. <br />2. Deine Internetadresse angeben. <br />3. Die Zwei erhaltenen Schlüssel hier eintragen.',
  'save' => 'Speichern',
  'success' => 'Erfolreich durchgef&uuml;hrt',
  'failed' => 'Vorgang Fehlgeschlagen',
  'web-key' => 'Webseiten-Schl&uuml;ssel',
  'secret-key' => 'Geheimer-Schl&uuml;ssel'
);

