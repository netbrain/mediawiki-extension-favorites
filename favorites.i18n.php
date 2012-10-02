<?php
/**
 * Internationalisation for Favorites
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English (en)
 * @author Jeremy Lemley
 */
$messages['en'] = array(
'favorites-desc' => 'Creating a favorites list',

# Edit pages
'favoritethis'                        => 'Favorite this page',

# Preferences page
'prefs-favoritelist'               => 'Favorites',
'prefs-favoritelist-token'         => 'Favorites token:',
'prefs-advancedfavoritelist'       => 'Advanced options',

# Favoritelist
'favoritelist'            => 'My favorites',
'myfavoritelist'          => 'My favorites',
'favoritelistfor'         => "(for '''$1''')",
'nofavoritelist'          => 'You have no items in your favorites.',
'favoritelistanontext'    => 'Please $1 to view or edit items in your favorites.',
'favoritenologin'         => 'Not logged in',
'favoritenologintext'     => 'You must be [[Special:UserLogin|logged in]] to modify your favorites.',
'addedfavorite'           => 'Added to favorites',
'addedfavoritetext'       => 'The page "[[:$1]]" has been added to your [[Special:Favoritelist|favorites]].',
'removedfavorite'         => 'Removed from favorites',
'removedfavoritetext'     => 'The page "[[:$1]]" has been removed from [[Special:Favoritelist|your favorites]].',
'favorite'                => 'Favorite',
'favoritethispage'        => 'Favorite this page',
'unfavorite'              => 'Unfavorite',
'unfavoritethispage'      => 'Stop favoriteing',
'favoritelist-options'    => 'Favorites options',

# Displayed when you click the "favorite" button and it is in the process of favoriteing
'favoriteing'   => 'Favoriteing...',
'unfavoriteing' => 'Unfavoriteing...',

# Keyboard access keys for power users
'accesskey-pt-favoritelist'            => 'l', # do not translate or duplicate this message to other languages
'accesskey-ca-favorite'                => 'w', # do not translate or duplicate this message to other languages
'accesskey-ca-unfavorite'              => 'w', # do not translate or duplicate this message to other languages
'accesskey-favorite'                   => 'w', # do not translate or duplicate this message to other languages

# Tooltip help for the actions
'tooltip-pt-favoritelist'            => 'The list of pages you are monitoring for changes',
'tooltip-ca-favorite'                => 'Add this page to your favorites',
'tooltip-ca-unfavorite'              => 'Remove this page from your favorites',
'tooltip-favorite'                   => 'Add this page to your favorites',

# 'all' in various places, this might be different for inflected languages
'favoritelistall2'    => 'all',

# Favoritelist editor
'favoritelistedit-numitems'       => 'Your favorites contain {{PLURAL:$1|1 title|$1 titles}}.',
'favoritelistedit-noitems'        => 'Your favorites contain no titles.',
'favoritelistedit-normal-title'   => 'Edit favorites',
'favoritelistedit-normal-legend'  => 'Remove titles from favorites',
'favoritelistedit-normal-explain' => 'Titles in your favorites are shown below.
To remove a title, check the box next to it, and click "{{int:Favoritelistedit-normal-submit}}".
You can also [[Special:Favoritelist/raw|edit the raw list]].',
'favoritelistedit-normal-submit'  => 'Remove titles',
'favoritelistedit-normal-done'    => '{{PLURAL:$1|1 title was|$1 titles were}} removed from your favorites:',
'favoritelistedit-raw-title'      => 'Edit raw favorites list',
'favoritelistedit-raw-legend'     => 'Edit raw favorites list',
'favoritelistedit-raw-explain'    => 'Titles in your favorites are shown below, and can be edited by adding to and removing from the list;
one title per line.
When finished, click "{{int:Favoritelistedit-raw-submit}}".
You can also [[Special:Favoritelist/edit|use the standard editor]].',
'favoritelistedit-raw-titles'     => 'Titles:',
'favoritelistedit-raw-submit'     => 'Update favorites',
'favoritelistedit-raw-done'       => 'Your favorites have been updated.',
'favoritelistedit-raw-added'      => '{{PLURAL:$1|1 title was|$1 titles were}} added:',
'favoritelistedit-raw-removed'    => '{{PLURAL:$1|1 title was|$1 titles were}} removed:',

# Favoritelist editing tools
'favoritelisttools-view' => 'View Favorites',
'favoritelisttools-edit' => 'View and edit favorites',
'favoritelisttools-raw'  => 'Edit raw favorites',

);

/** Message documentation (Message documentation)
 * @author Beta16
 * @author EugeneZelenko
 * @author Hamilton Abreu
 * @author Kghbln
 * @author Siebrand
 */
$messages['qqq'] = array(
	'favorites-desc' => '{{desc}}',
	'prefs-favoritelist' => '{{Identical|Favorite}}',
	'prefs-favoritelist-token' => "This message is basically the same as {{msg-mw|Prefs-watchlist-token}}. A token is a piece of information in this context that is used to prove one's identity electronically[http://en.wikipedia.org/wiki/Security_token]. Have a look at the Watchlist tab in [[Special:Preferences]]. There is a token there for accessing your watchlist RSS feed without having to log in (you are using your token to identify yourself).",
	'favoritelistanontext' => '$1 is substituted by {{msg|loginreqlink}}',
	'favorite' => '{{Identical|Favorite}}Action text to mark a page as favorite.',
	'unfavorite' => 'Action text to unmark a currently favorite page.',
	'favoritelistall2' => '{{Identical|All}}',
	'favoritelistedit-raw-titles' => '{{Identical|Title}}',
);

/** Arabic (العربية)
 * @author روخو
 */
$messages['ar'] = array(
	'favorites-desc' => 'إنشاء قائمة المفضلة',
	'prefs-advancedfavoritelist' => 'خيارات متقدمة',
	'favoritelist' => 'تفضيلاتي',
	'myfavoritelist' => 'تفضيلاتي',
	'favoritelistfor' => "(ل '''$1''')",
	'nofavoritelist' => 'لا توجد مدخلات في مفضلتك.',
	'favorite' => 'مفضلة',
	'favoritelistall2' => 'الكل',
	'favoritelistedit-normal-title' => 'تعديل المفضلات',
	'favoritelistedit-raw-titles' => 'العناوين:',
	'favoritelistedit-raw-submit' => 'تحديث المفضلات',
	'favoritelisttools-view' => 'عرض التفضيلات',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 */
$messages['az'] = array(
	'favoritelistall2' => 'bütün',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'favorites-desc' => 'Стварэньне сьпісу ўлюблёных',
	'favoritethis' => 'Зрабіць гэтую старонку ўлюблёнай',
	'prefs-favoritelist' => 'Улюблёныя',
	'prefs-favoritelist-token' => 'Ключ улюблёных:',
	'prefs-advancedfavoritelist' => 'Дадатковыя налады',
	'favoritelist' => 'Мае ўлюблёныя',
	'myfavoritelist' => 'Мае ўлюблёныя',
	'favoritelistfor' => "(для '''$1''')",
	'nofavoritelist' => 'Ваш сьпіс улюблёных пусты.',
	'favoritelistanontext' => 'Вам патрэбна $1, каб праглядаць альбо рэдагаваць сьпіс улюблёных.',
	'favoritenologin' => 'Вы не ўвайшлі ў сыстэму',
	'favoritenologintext' => 'Вам неабходна [[Special:UserLogin|ўвайсьці ў сыстэму]], каб зьмяніць Ваш сьпіс улюблёных.',
	'addedfavorite' => 'Дададзеныя ва ўлюблёныя',
	'addedfavoritetext' => 'Старонка «[[:$1]]» была дададзеная ў Ваш [[Special:Favoritelist|сьпіс улюблёных]].',
	'removedfavorite' => 'Выдаленыя з улюблёных',
	'removedfavoritetext' => 'Старонка «[[:$1]]» была выдаленая з [[Special:Favoritelist|Вашага сьпісу ўлюблёных]].',
	'favorite' => 'Улюблёныя',
	'favoritethispage' => 'Зрабіць гэтую старонку ўлюблёнай',
	'unfavorite' => 'Выдаліць з улюблёных',
	'unfavoritethispage' => 'Спыніць даданьне да ўлюблёных',
	'favoritelist-options' => 'Налады сьпісу ўлюблёных',
	'favoriteing' => 'Даданьне да сьпісу ўлюблёных…',
	'unfavoriteing' => 'Выдаленьне са сьпісу ўлюблёных…',
	'tooltip-pt-favoritelist' => 'Сьпіс старонак, за зьменамі якіх Вы назіраеце',
	'tooltip-ca-favorite' => 'Дадаць гэтую старонку ва ўлюблёныя',
	'tooltip-ca-unfavorite' => 'Выдаліць гэтую старонку з улюблёных',
	'tooltip-favorite' => 'Дадаць гэтую старонку ва ўлюблёныя',
	'favoritelistall2' => 'усе',
	'favoritelistedit-numitems' => 'Сьпіс Вашых улюблёных утрымлівае $1 {{PLURAL:$1|назву|назвы|назваў}}.',
	'favoritelistedit-noitems' => 'Сьпіс Вашых улюблёных не ўтрымлівае назваў.',
	'favoritelistedit-normal-title' => 'Рэдагаваць сьпіс улюблёных',
	'favoritelistedit-normal-legend' => 'Выдаліць назвы з улюблёных',
	'favoritelistedit-normal-explain' => 'Ніжэй пададзеныя назвы з Вашага сьпісу ўлюблёных.
Для выдаленьня назвы са сьпісу пазначце адпаведныя пазыцыі і націсьніце кнопку «{{int:Favoritelistedit-normal-submit}}».
Таксама Вы можаце [[Special:Favoritelist/raw|рэдагаваць нефарматаваны сьпіс]].',
	'favoritelistedit-normal-submit' => 'Выдаліць назвы',
	'favoritelistedit-normal-done' => '$1 {{PLURAL:$1|назва была выдаленая|назвы былі выдаленыя|назваў былі выдаленыя}} з Вашага сьпісу ўлюблёных:',
	'favoritelistedit-raw-title' => 'Рэдагаваць нефарматаваны сьпіс улюблёных',
	'favoritelistedit-raw-legend' => 'Рэдагаваць нефарматаваны сьпіс улюблёных',
	'favoritelistedit-raw-explain' => 'Ніжэй пададзены сьпіс назваў з Вашага сьпісу ўлюблёных, і Вы можаце яго рэдагаваць, дадаючы і выдаляючы іх;
адна назва ў радку.
Пасьля заканчэньня рэдагаваньня, націсьніце «{{int:Favoritelistedit-raw-submit}}».
Таксама Вы можаце [[Special:Favoritelist/edit|выкарыстаць стандартны інтэрфэйс рэдагаваньня]].',
	'favoritelistedit-raw-titles' => 'Назвы:',
	'favoritelistedit-raw-submit' => 'Абнавіць сьпіс улюблёных',
	'favoritelistedit-raw-done' => 'Ваш сьпіс улюблёных быў абноўлены.',
	'favoritelistedit-raw-added' => '$1 {{PLURAL:$1|назва была дададзеная|назвы былі дададзеныя|назваў былі дададзеныя}}:',
	'favoritelistedit-raw-removed' => '$1 {{PLURAL:$1|назва была выдаленая|назвы былі выдаленыя|назваў былі выдаленыя}}:',
	'favoritelisttools-view' => 'Паказаць сьпіс улюблёных',
	'favoritelisttools-edit' => 'Прагляд і рэдагаваньне сьпісу ўлюблёных',
	'favoritelisttools-raw' => 'Рэдагаваць нефарматаваны сьпіс улюблёных',
);

/** Bulgarian (български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'favoritelistall2' => 'всички',
);

/** Breton (brezhoneg)
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'favoritethis' => "Ouzhpennañ d'ar sinedoù",
	'prefs-advancedfavoritelist' => 'Dibarzhioù araokaet',
	'favoritelist' => 'Ma sinedoù',
	'myfavoritelist' => 'Ma sinedoù',
	'favoritelistfor' => "(evit '''$1''')",
	'nofavoritelist' => "N'eus pennad ebet en ho roll sinedoù.",
	'favoritelistanontext' => "Ret eo deoc'h $1 evit gwelet pe kemmañ an elfennoù zo en ho roll sinedoù.",
	'favoritenologin' => 'Digevreet',
	'favoritenologintext' => "Ret eo deoc'h bezañ [[Special:UserLogin|kevreet]] a-benn gellout kemmañ ho roll sinedoù.",
	'addedfavorite' => "Ouzhpennet d'ar pennrolloù",
	'addedfavoritetext' => 'Ouzhpennet eo bet ar bajenn "[[:$1]]" d\'ho [[Special:Favoritelist|sinedoù]].',
	'removedfavorite' => 'Dilamet deus ar sinedoù',
	'removedfavoritetext' => 'Lamet eo bet ar bajenn "[[:$1]]" a-ziwar ho [[Special:Watchlist|sinedoù]].',
	'favorite' => 'Sined',
	'favoritethispage' => "Ouzhpennañ d'ar sinedoù",
	'unfavorite' => 'Skarzhañ sinedoù',
	'favoritelistall2' => 'pep tra',
	'favoritelistedit-normal-title' => 'Aozañ ar sinedoù',
	'favoritelistedit-normal-submit' => 'Tennañ an titloù',
	'favoritelistedit-raw-titles' => 'Titloù :',
);

/** Czech (česky)
 * @author Chmee2
 */
$messages['cs'] = array(
	'addedfavorite' => 'Přidat do oblíbených',
	'favorite' => 'Oblíbené',
	'favoritelistall2' => 'vše',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Umherirrender
 */
$messages['de'] = array(
	'favorites-desc' => 'Ermöglicht das Erstellen von Favoritenlisten',
	'favoritethis' => 'Diese Seite auf die Favoritenliste setzen',
	'prefs-favoritelist' => 'Favoriten',
	'prefs-favoritelist-token' => 'Favoriten-Token:',
	'prefs-advancedfavoritelist' => 'Erweiterte Optionen',
	'favoritelist' => 'Meine Favoriten',
	'myfavoritelist' => 'Meine Favoriten',
	'favoritelistfor' => "(für '''$1''')",
	'nofavoritelist' => 'Es befinden sich keine Einträge auf deiner Favoritenliste.',
	'favoritelistanontext' => 'Du musst dich $1, um deine Favoritenliste sehen oder Einträge auf ihr bearbeiten zu können.',
	'favoritenologin' => 'Nicht angemeldet',
	'favoritenologintext' => 'Du musst [[Special:UserLogin|angemeldet]] sein, um deine Favoritenliste bearbeiten zu können.',
	'addedfavorite' => 'Zur Favoritenliste hinzugefügt',
	'addedfavoritetext' => 'Die Seite „[[:$1]]“ wurde zu deiner [[Special:Favoritelist|Favoritenliste]] hinzugefügt.',
	'removedfavorite' => 'Von der Favoritenliste entfernt',
	'removedfavoritetext' => 'Die Seite „[[:$1]]“ wurde von deiner [[Special:Favoritelist|Favoritenliste]] entfernt.',
	'favorite' => 'Zur Favoritenliste hinzufügen',
	'favoritethispage' => 'Diese Seite zur Favoritenliste hinzufügen',
	'unfavorite' => 'Von der Favoritenliste entfernen',
	'unfavoritethispage' => 'Diese Seite von der Favoritenliste entfernen',
	'favoritelist-options' => 'Optionen zu Favoriten',
	'favoriteing' => 'Speichere …',
	'unfavoriteing' => 'Entferne …',
	'tooltip-pt-favoritelist' => 'Die Liste der Seiten, die sich auf deiner Favoritenliste befinden',
	'tooltip-ca-favorite' => 'Füge diese Seite zu deiner Favoritenliste hinzu',
	'tooltip-ca-unfavorite' => 'Entferne diese Seite von deiner Favoritenliste',
	'tooltip-favorite' => 'Füge diese Seite zu deiner Favoritenliste hinzu',
	'favoritelistall2' => 'alle',
	'favoritelistedit-numitems' => 'Deine Favoritenliste enthält {{PLURAL:$1|einen Eintrag|$1 Einträge}}.',
	'favoritelistedit-noitems' => 'Deine Favoritenliste enthält keine Einträge.',
	'favoritelistedit-normal-title' => 'Favoritenliste bearbeiten',
	'favoritelistedit-normal-legend' => 'Einträge aus der Favoritenliste entfernen',
	'favoritelistedit-normal-explain' => 'Dies sind die Einträge deiner Favoritenliste.
Um Einträge zu entfernen, markiere die Kästchen neben den Einträgen und klicke am Ende der Seite auf „{{int:Favoritelistedit-normal-submit}}“.
Du kannst deine Beobachtungsliste auch im [[Special:Favoritelist/raw|Listenformat bearbeiten]].',
	'favoritelistedit-normal-submit' => 'Einträge entfernen',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|Ein Eintrag wurde|$1 Einträge wurden}} von deiner Favoritenliste entfernt:',
	'favoritelistedit-raw-title' => 'im Listenformat bearbeiten',
	'favoritelistedit-raw-legend' => 'Favoritenliste im Listenformat bearbeiten',
	'favoritelistedit-raw-explain' => 'Dies sind die Einträge deiner Favoritenliste im Listenformat. Die Einträge können zeilenweise gelöscht oder hinzugefügt werden.
Pro Zeile ist ein Eintrag erlaubt.
Sobald du fertig bist, klicke auf „{{int:Favoritelistedit-raw-submit}}“.
Du kannst auch die [[Special:Favoritelist/edit|Standardseite]] zum Bearbeiten benutzen.',
	'favoritelistedit-raw-titles' => 'Einträge:',
	'favoritelistedit-raw-submit' => 'Favoritenliste aktualisieren',
	'favoritelistedit-raw-done' => 'Deine Favoritenliste wurde aktualisiert.',
	'favoritelistedit-raw-added' => '{{PLURAL:$1|Ein Eintrag wurde|$1 Einträge wurden}} hinzugefügt:',
	'favoritelistedit-raw-removed' => '{{PLURAL:$1|Ein Eintrag wurde|$1 Einträge wurden}} entfernt:',
	'favoritelisttools-view' => 'Favoritenliste ansehen',
	'favoritelisttools-edit' => 'Favoritenliste ansehen und bearbeiten',
	'favoritelisttools-raw' => 'Favoritenliste im Listenformat bearbeiten',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Kghbln
 * @author Umherirrender
 */
$messages['de-formal'] = array(
	'nofavoritelist' => 'Es befinden sich keine Einträge auf Ihrer Favoritenliste.',
	'favoritelistanontext' => 'Sie müssen sich $1, um Ihre Favoritenliste sehen oder Einträge auf ihr bearbeiten zu können.',
	'favoritenologintext' => 'Sie müssen [[Special:UserLogin|angemeldet]] sein, um Ihre Favoritenliste bearbeiten zu können.',
	'addedfavoritetext' => 'Die Seite „[[:$1]]“ wurde zu Ihrer [[Special:Favoritelist|Favoritenliste]] hinzugefügt.',
	'removedfavoritetext' => 'Die Seite „[[:$1]]“ wurde von Ihrer [[Special:Favoritelist|Favoritenliste]] entfernt.',
	'tooltip-pt-favoritelist' => 'Die Liste der Seiten, die sich auf Ihrer Favoritenliste befinden',
	'tooltip-ca-favorite' => 'Fügen Sie diese Seite zu Ihrer Favoritenliste hinzu',
	'tooltip-ca-unfavorite' => 'Entfernen Sie diese Seite von Ihrer Favoritenliste',
	'tooltip-favorite' => 'Fügen Sie diese Seite zu Ihrer Favoritenliste hinzu',
	'favoritelistedit-numitems' => 'Ihre Favoritenliste enthält {{PLURAL:$1|einen Eintrag|$1 Einträge}}.',
	'favoritelistedit-noitems' => 'Ihre Favoritenliste enthält keine Einträge.',
	'favoritelistedit-normal-explain' => 'Dies sind die Einträge Ihrer Favoritenliste.
Um Einträge zu entfernen, markieren Sie die Kästchen neben den Einträgen und klicken Sie am Ende der Seite auf „{{int:Favoritelistedit-normal-submit}}“.
Sie können Ihre Favoritenliste auch im [[Special:Favoritelist/raw|Listenformat bearbeiten]].',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|Ein Eintrag wurde|$1 Einträge wurden}} von Ihrer Favoritenliste entfernt:',
	'favoritelistedit-raw-explain' => 'Dies sind die Einträge Ihrer Favoritenliste im Listenformat. Die Einträge können zeilenweise gelöscht oder hinzugefügt werden.
Pro Zeile ist ein Eintrag erlaubt.
Sobald Sie fertig sind, klicken Sie auf „{{int:Favoritelistedit-raw-submit}}“.
Sie können auch die [[Special:Favoritelist/edit|Standardseite]] zum Bearbeiten benutzen.',
	'favoritelistedit-raw-done' => 'Ihre Favoritenliste wurde aktualisiert.',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'favoritelist' => 'Wesineye mı',
	'myfavoritelist' => 'Wesineye mı',
	'favorite' => 'Weseney',
	'favoritelistall2' => 'pêro',
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Dferg
 * @author Mor
 */
$messages['es'] = array(
	'favorites-desc' => 'Creando una lista de favoritos',
	'favoritethis' => 'Marcar esta página como favorita',
	'prefs-favoritelist' => 'Favoritos',
	'prefs-favoritelist-token' => 'Credencial de los favoritos:',
	'prefs-advancedfavoritelist' => 'Opciones avanzadas',
	'favoritelist' => 'Mis Favoritos',
	'myfavoritelist' => 'Mis Favoritos',
	'favoritelistfor' => "(para '''$1''')",
	'nofavoritelist' => 'No tienes ninguna página en tu lista de favoritos.',
	'favoritelistanontext' => 'Por favor,  $1 para ver o editar elementos en tus Favoritos.',
	'favoritenologin' => 'No ha iniciado sesión',
	'favoritenologintext' => 'Debes [[Special:UserLogin|iniciar sesión]] para modificar tu lista de favoritos.',
	'addedfavorite' => 'Añadido a favoritos',
	'addedfavoritetext' => 'La página "[[:$1]]" se ha agregado a su [[Special:Favoritelist|lista de favoritos]].',
	'removedfavorite' => 'Quitar de Favoritos',
	'removedfavoritetext' => 'La página "[[:$1]]" ha sido eliminada de su [[Special:Favoritelist|lista de favoritos]].',
	'favorite' => 'Favorito',
	'favoritethispage' => 'Marcar esta página como favorita',
	'unfavorite' => 'Suprimir de la lista de favoritos',
	'unfavoritethispage' => 'Dejar de poner en lista de favoritos',
	'favoritelist-options' => 'Opciones de Favoritos',
	'favoriteing' => 'Poniendo en lista de Favoritos...',
	'unfavoriteing' => 'Quitando de la lista de favoritos...',
	'tooltip-pt-favoritelist' => 'La lista de páginas cuyos cambios está supervisando',
	'tooltip-ca-favorite' => 'Añadir esta página a tus favoritos',
	'tooltip-ca-unfavorite' => 'Eliminar esta página de tus favoritos',
	'tooltip-favorite' => 'Añadir esta página a sus Favoritos.',
	'favoritelistall2' => 'todos',
	'favoritelistedit-numitems' => 'Su lista de Favoritos contiene  {{PLURAL:$1|1 título| $1 títulos}}.',
	'favoritelistedit-noitems' => 'Su lista de favoritos no contiene títulos.',
	'favoritelistedit-normal-title' => 'Editar favoritos',
	'favoritelistedit-normal-legend' => 'Quitar títulos de su lista de Favoritos',
	'favoritelistedit-normal-explain' => 'A continuación se listan las páginas de su lista de Favoritos.
Para quitar un título, marque la casilla junto a él, y pulse "{{int:Favoritelistedit-normal-submit}}".
También puede [[Special:Favoritelist/raw|editar la lista en bloque]].',
	'favoritelistedit-normal-submit' => 'Quitar títulos',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|1 título fue| $1 títulos fueron}} quitados de su lista de Favoritos:',
	'favoritelistedit-raw-title' => 'Editar lista de Favoritos en bloque',
	'favoritelistedit-raw-legend' => 'Editar lista de Favoritos en bloque',
	'favoritelistedit-raw-explain' => 'A continuación se listan los títulos de su lista de Favoritos. Esta lista puede editarse añadiendo o eliminando títulos de la lista;
un título por línea.
Cuando acabe, pulse "{{int:Favoritelistedit-raw-submit}}".
También puede [[Special:Favoritelist/edit|usar el editor estándar]].',
	'favoritelistedit-raw-titles' => 'Títulos:',
	'favoritelistedit-raw-submit' => 'Actualizar lista de Favoritos',
	'favoritelistedit-raw-done' => 'Se ha actualizado su lista de Favoritos.',
	'favoritelistedit-raw-added' => '{{PLURAL:$1|1 título fue añadido| $1 títulos fueron añadidos}}:',
	'favoritelistedit-raw-removed' => '{{PLURAL:$1|1 título fue eliminado| $1 títulos fueron eliminados}}:',
	'favoritelisttools-view' => 'Ver lista de Favoritos',
	'favoritelisttools-edit' => 'Ver y editar la lista de Favoritos',
	'favoritelisttools-raw' => 'Editar lista de favoritos en bloque',
);

/** Estonian (eesti)
 * @author Avjoska
 */
$messages['et'] = array(
	'prefs-favoritelist' => 'Lemmikud',
	'favoritelist' => 'Minu lemmikud',
	'myfavoritelist' => 'Minu lemmikud',
	'favoritenologin' => 'Ei ole sisse logitud',
	'addedfavorite' => 'Lisatud lemmikutesse',
	'removedfavorite' => 'Lemmikute hulgast eemaldatud',
	'favorite' => 'Lemmik',
	'favoritethispage' => 'Märgi see leht lemmikute hulka',
	'unfavorite' => 'Eemalda leht lemmikute hulgast',
	'favoritelist-options' => 'Lemmikute suvandid',
	'favoriteing' => 'Lisan lemmikute hulka...',
	'unfavoriteing' => 'Kustutan lemmikute hulgast...',
	'tooltip-ca-favorite' => 'Lisa see lehekülg oma lemmikutesse',
	'tooltip-ca-unfavorite' => 'Eemalda see lehekülg oma lemmikutest',
	'tooltip-favorite' => 'Lisa see lehekülg oma lemmikutesse',
	'favoritelistall2' => 'kõik',
);

/** Basque (euskara)
 * @author පසිඳු කාවින්ද
 */
$messages['eu'] = array(
	'favoritelistedit-raw-titles' => 'Izenburuak:',
);

/** Persian (فارسی)
 * @author Mjbmr
 */
$messages['fa'] = array(
	'favorite' => 'مورد علاقه کردن',
	'unfavorite' => 'از حالت مورد علاقه در آوردن',
	'unfavoritethispage' => 'توقف مورد علاقه کردن',
	'favoritelistall2' => 'همه',
	'favoritelistedit-raw-titles' => 'عنوان‌ها:',
);

/** Finnish (suomi)
 * @author Beluga
 */
$messages['fi'] = array(
	'favoritethis' => 'Lisää tämä sivu suosikkeihin',
	'prefs-favoritelist' => 'Suosikit',
	'favoritelist' => 'Omat suosikkini',
	'myfavoritelist' => 'Omat suosikkini',
	'favoritenologin' => 'Et ole kirjautunut sisään',
	'favorite' => 'Lisää suosikkeihisi',
	'favoritethispage' => 'Lisää tämä sivu suosikkeihisi',
	'unfavorite' => 'Poista suosikeista',
	'tooltip-ca-favorite' => 'Lisää tämä sivu suosikkeihisi',
	'favoritelistall2' => 'kaikki',
	'favoritelistedit-normal-title' => 'Muokkaa suosikkejasi',
	'favoritelistedit-normal-submit' => 'Poista sivut',
	'favoritelistedit-raw-titles' => 'Sivut:',
	'favoritelistedit-raw-submit' => 'Päivitä suosikkisi',
	'favoritelistedit-raw-done' => 'Suosikkisi on päivitetty.',
);

/** French (français)
 * @author Gomoko
 * @author Hashar
 * @author Y-M D
 */
$messages['fr'] = array(
	'favorites-desc' => 'Créer une liste de favoris',
	'favoritethis' => 'Ajouter cette page aux favoris',
	'prefs-favoritelist' => 'Favoris',
	'prefs-favoritelist-token' => 'Jeton des favoris :',
	'prefs-advancedfavoritelist' => 'Options avancées',
	'favoritelist' => 'Mes favoris',
	'myfavoritelist' => 'Mes favoris',
	'favoritelistfor' => '(pour « $1 »)',
	'nofavoritelist' => "Vous n'avez aucune page en favoris.",
	'favoritelistanontext' => 'Merci de vous $1 pour voir ou modifier des éléments de vos favoris.',
	'favoritenologin' => 'Non connecté',
	'favoritenologintext' => 'Vous devez être [[Special:UserLogin|connecté]] pour pouvoir modifier vos favoris.',
	'addedfavorite' => 'Ajouté aux favoris',
	'addedfavoritetext' => 'La page "[[:$1]]" a été ajoutée à vos [[Special:Favoritelist|favoris]].',
	'removedfavorite' => 'Supprimé des favoris',
	'removedfavoritetext' => 'La page "[[:$1]]" a été supprimée de [[Special:Favoritelist|vos favoris]].',
	'favorite' => 'Favoris',
	'favoritethispage' => 'Mettre cette page dans vos favoris',
	'unfavorite' => 'Supprimer des favoris',
	'unfavoritethispage' => 'Arrêter de mettre en favori',
	'favoritelist-options' => 'Options Favoris',
	'favoriteing' => 'Mettre en favori...',
	'unfavoriteing' => 'Ne plus mettre en favori...',
	'tooltip-pt-favoritelist' => 'La liste des pages dont vous suivez les modifications',
	'tooltip-ca-favorite' => 'Ajouter cette page à vos favoris',
	'tooltip-ca-unfavorite' => 'Supprimer cette page de vos favoris',
	'tooltip-favorite' => 'Ajouter cette page à vos favoris',
	'favoritelistall2' => 'tous',
	'favoritelistedit-numitems' => 'Vos favoris contiennent {{PLURAL:$1|1 titre|$1 titres}}.',
	'favoritelistedit-noitems' => 'Vos favoris ne contiennent aucun titre.',
	'favoritelistedit-normal-title' => 'Modifier favoris',
	'favoritelistedit-normal-legend' => 'Supprimer des titres de vos favoris',
	'favoritelistedit-normal-explain' => 'Les titres dans vos favoris sont affichés ci-dessous.
Pour supprimer un titre, cochez la case à côté et cliquez sur "{{int:Favoritelistedit-normal-submit}}".
Vous pouvez aussi [[Special:Favoritelist/raw|modifier la liste brute]].',
	'favoritelistedit-normal-submit' => 'Retirer les titres',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|un titre a était retiré|$1 titres ont été retirées}} de vos favoris :',
	'favoritelistedit-raw-title' => 'Modifier la liste brute des favoris',
	'favoritelistedit-raw-legend' => 'Modifier la liste brute des favoris',
	'favoritelistedit-raw-explain' => 'Les titres dans vos favoris sont affichés ci-dessous, et peuvent être modifiés en en ajoutant ou en en supprimant de la liste;
un titre par ligne.
Une fois terminé, cliquez sur "{{int:Favoritelistedit-raw-submit}}".
Vous pouvez aussi [[Special:Favoritelist/edit|utiliser l\'éditeur standard]].',
	'favoritelistedit-raw-titles' => 'Titres :',
	'favoritelistedit-raw-submit' => 'Mise à jour favoris',
	'favoritelistedit-raw-done' => 'Vos favoris ont été mis à jour.',
	'favoritelistedit-raw-added' => '{{PLURAL:$1|1 titre a été ajouté|$1 titres ont été ajoutés}}:',
	'favoritelistedit-raw-removed' => '{{PLURAL:$1|1 titre a été supprimé|$1 titres ont été supprimés}}:',
	'favoritelisttools-view' => 'Voir Favoris',
	'favoritelisttools-edit' => 'Voir et modifier les favoris',
	'favoritelisttools-raw' => 'Modifier la liste brute des favoris',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'favorites-desc' => 'Fâre una lista de favoris',
	'favoritethis' => 'Apondre ceta pâge ux favoris',
	'prefs-favoritelist' => 'Favoris',
	'prefs-favoritelist-token' => 'Jeton des favoris :',
	'prefs-advancedfavoritelist' => 'Chouèx avanciês',
	'favoritelist' => 'Mos favoris',
	'myfavoritelist' => 'Mos favoris',
	'favoritelistfor' => "(de '''$1''')",
	'nofavoritelist' => 'Vos avéd gins de pâge en favoris.',
	'favoritelistanontext' => 'Vos volyéd $1 por fâre vêre ou changiér los èlèments de voutros favoris.',
	'favoritenologin' => 'Pas branchiê',
	'favoritenologintext' => 'Vos dête étre [[Special:UserLogin|branchiê]] por changiér voutros favoris.',
	'addedfavorite' => 'Apondu ux favoris',
	'addedfavoritetext' => 'La pâge « [[:$1]] » at étâ apondua a voutros [[Special:Favoritelist|favoris]].',
	'removedfavorite' => 'Enlevâ des favoris',
	'removedfavoritetext' => 'La pâge « [[:$1]] » at étâ enlevâ de voutros [[Special:Favoritelist|favoris]].',
	'favorite' => 'Apondre ux favoris',
	'favoritethispage' => 'Apondre ceta pâge ux favoris',
	'unfavorite' => 'Enlevar des favoris',
	'unfavoritethispage' => 'Enlevar ceta pâge des favoris',
	'favoritelist-options' => 'Chouèx des favoris',
	'favoriteing' => 'Betar en favori...',
	'unfavoriteing' => 'Pas més betar en favori...',
	'tooltip-pt-favoritelist' => 'La lista de les pâges que vos siude los changements',
	'tooltip-ca-favorite' => 'Apondre ceta pâge a voutros favoris',
	'tooltip-ca-unfavorite' => 'Enlevar ceta pâge de voutros favoris',
	'tooltip-favorite' => 'Apondre ceta pâge a voutros favoris',
	'favoritelistall2' => 'tôs',
	'favoritelistedit-numitems' => 'Voutros favoris contegnont $1 titro{{PLURAL:$1||s}}.',
	'favoritelistedit-noitems' => 'Voutros favoris contegnont gins de titro.',
	'favoritelistedit-normal-title' => 'Changiér los favoris',
	'favoritelistedit-normal-legend' => 'Enlevar des titros de voutros favoris',
	'favoritelistedit-normal-submit' => 'Enlevar los titros',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|Yon titro at étâ enlevâ|$1 titros ont étâ enlevâs}} de voutros favoris :',
	'favoritelistedit-raw-title' => 'Changiér la lista des favoris en fôrma bruta',
	'favoritelistedit-raw-legend' => 'Changiér la lista des favoris en fôrma bruta',
	'favoritelistedit-raw-titles' => 'Titros :',
	'favoritelistedit-raw-submit' => 'Betar a jorn los favoris',
	'favoritelistedit-raw-done' => 'Voutros favoris ont étâ betâs a jorn.',
	'favoritelistedit-raw-added' => '{{PLURAL:$1|Yon titro at étâ apondu|$1 titros ont étâ apondus}} :',
	'favoritelistedit-raw-removed' => '{{PLURAL:$1|Yon titro at étâ enlevâ|$1 titros ont étâ enlevâs}} :',
	'favoritelisttools-view' => 'Vêre los favoris',
	'favoritelisttools-edit' => 'Vêre et changiér los favoris',
	'favoritelisttools-raw' => 'Changiér los favoris en fôrma bruta',
);

/** Irish (Gaeilge)
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'favoritelistall2' => 'iad uile',
	'favoritelistedit-raw-titles' => 'Teideal:',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'favorites-desc' => 'Crear unha lista de favoritos',
	'favoritethis' => 'Engadir esta páxina aos favoritos',
	'prefs-favoritelist' => 'Favoritos',
	'prefs-favoritelist-token' => 'Pase para os favoritos:',
	'prefs-advancedfavoritelist' => 'Opcións avanzadas',
	'favoritelist' => 'Os meus favoritos',
	'myfavoritelist' => 'Os meus favoritos',
	'favoritelistfor' => "(de '''$1''')",
	'nofavoritelist' => 'Non ten elementos na súa lista de favoritos.',
	'favoritelistanontext' => 'Faga o favor de $1 ao sistema para ver ou editar os elementos da súa lista de favoritos.',
	'favoritenologin' => 'Non accedeu ao sistema',
	'favoritenologintext' => 'Debe [[Special:UserLogin|acceder ao sistema]] para modificar a súa lista de favoritos.',
	'addedfavorite' => 'Engadido aos favoritos',
	'addedfavoritetext' => 'A páxina "[[:$1]]" foi engadida [[Special:Favoritelist|á súa lista de favoritos]].',
	'removedfavorite' => 'Eliminada dos favoritos',
	'removedfavoritetext' => 'A páxina "[[:$1]]" foi eliminada [[Special:Favoritelist|da súa lista de favoritos]].',
	'favorite' => 'Favorito',
	'favoritethispage' => 'Engadir esta páxina aos favoritos',
	'unfavorite' => 'Eliminar dos favoritos',
	'unfavoritethispage' => 'Deixar de ter nos favoritos',
	'favoritelist-options' => 'Opcións de favoritos',
	'favoriteing' => 'Engadindo aos favoritos...',
	'unfavoriteing' => 'Eliminando dos favoritos...',
	'tooltip-pt-favoritelist' => 'A lista de páxinas cuxas modificacións está a seguir',
	'tooltip-ca-favorite' => 'Engadir esta páxina aos seus favoritos',
	'tooltip-ca-unfavorite' => 'Eliminar esta páxina dos seus favoritos',
	'tooltip-favorite' => 'Engadir esta páxina aos seus favoritos',
	'favoritelistall2' => 'todo',
	'favoritelistedit-numitems' => 'Os seus favoritos conteñen {{PLURAL:$1|1 título|$1 títulos}}.',
	'favoritelistedit-noitems' => 'Os seus favoritos non conteñen títulos.',
	'favoritelistedit-normal-title' => 'Editar os favoritos',
	'favoritelistedit-normal-legend' => 'Eliminar títulos dos favoritos',
	'favoritelistedit-normal-explain' => 'Os títulos da súa lista de favoritos aparecen a continuación.
Para eliminar un título, escóllao na súa caixa de selección e prema en "{{int:Favoritelistedit-normal-submit}}".
Tamén pode [[Special:Favoritelist/raw|editar a lista simple]].',
	'favoritelistedit-normal-submit' => 'Eliminar os títulos',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|Eliminouse un título|Elimináronse $1 títulos}} da súa lista de favoritos:',
	'favoritelistedit-raw-title' => 'Editar a lista simple de favoritos',
	'favoritelistedit-raw-legend' => 'Editar a lista simple de favoritos',
	'favoritelistedit-raw-explain' => 'Os títulos da súa lista de favoritos aparecen a continuación. Pódense editar engadíndoos ou retirándoos da lista; un título por liña.
Ao rematar, prema en "{{int:Favoritelistedit-raw-submit}}".
Tamén pode [[Special:Favoritelist/edit|empregar o editor normal]].',
	'favoritelistedit-raw-titles' => 'Títulos:',
	'favoritelistedit-raw-submit' => 'Actualizar os favoritos',
	'favoritelistedit-raw-done' => 'Actualizáronse os seus favoritos.',
	'favoritelistedit-raw-added' => '{{PLURAL:$1|Engadiuse un título|Engadíronse $1 títulos}}:',
	'favoritelistedit-raw-removed' => '{{PLURAL:$1|Eliminouse un título|Elimináronse $1 títulos}}:',
	'favoritelisttools-view' => 'Ver os favoritos',
	'favoritelisttools-edit' => 'Ver e editar os favoritos',
	'favoritelisttools-raw' => 'Editar a lista simple de favoritos',
);

/** Hebrew (עברית)
 * @author Deror avi
 * @author Nirofir
 * @author Ofekalef
 * @author ערן
 */
$messages['he'] = array(
	'favorites-desc' => 'יצירת רשימת מועדפים',
	'favoritethis' => 'הוסף דף זה לרשימת המועדפים',
	'prefs-favoritelist' => 'רשימת מועדפים',
	'prefs-favoritelist-token' => 'מידע על מועדפים:',
	'prefs-advancedfavoritelist' => 'אפשרויות מתקדמות',
	'favoritelist' => 'המועדפים שלי',
	'myfavoritelist' => 'המועדפים שלי',
	'favoritelistfor' => "(עבור '''$1''')",
	'nofavoritelist' => 'אין פריטים ברשימת המועדפים שלך.',
	'favoritelistanontext' => 'נא $1 על מנת לצפות או לערוך פריטים ברשימת המעקב שלך.',
	'favoritenologin' => 'לא בחשבון',
	'favoritenologintext' => 'עליכם [[Special:UserLogin|להיכנס לחשבון]] כדי לערוך את המועדפים.',
	'addedfavorite' => 'הוסף לרשימת המועדפים',
	'addedfavoritetext' => 'הדף "[[:$1]]" הוסף לרשימת ה[[Special:Favoritelist|מועדפים]] שלך.',
	'removedfavorite' => 'הוסר מרשימת המועדפים',
	'removedfavoritetext' => 'הדף "[[$1]]" הוסר מרשימת ה[[Special:Favoritelist|מועדפים]] שלך.',
	'favoritelistedit-normal-title' => 'עריכת מועדפים',
	'favoritelistedit-raw-titles' => 'כותרות:',
	'favoritelisttools-view' => 'הצגת רשימת המועדפים',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'favorites-desc' => 'Zmóžnja wutworjenje lisćiny faworitow',
	'favoritethis' => 'Tutu stronu jako faworitu składować',
	'prefs-favoritelist' => 'Fawority',
	'prefs-favoritelist-token' => 'Faworitowy token:',
	'prefs-advancedfavoritelist' => 'Rozšěrjene opcije',
	'favoritelist' => 'Moje fawority',
	'myfavoritelist' => 'Moje fawority',
	'favoritelistfor' => "(za '''$1''')",
	'nofavoritelist' => 'Nimaš žane zapiski w swojich faworitach.',
	'favoritelistanontext' => 'Dyrbiš so $1, zo by zapiski w swojich faworitach wobhladał a wobdźěłał.',
	'favoritenologin' => 'Njepřizjewjeny',
	'favoritenologintext' => 'Dyrbiš [[Special:UserLogin|přizjewjeny]] być, zo by swoje fawority změnić móhł.',
	'addedfavorite' => 'Faworitam přidaty',
	'addedfavoritetext' => 'Strona "[[:$1]]" bu [[Special:Favoritelist|twojim faworitam]] přidata.',
	'removedfavorite' => 'Z faworitow wotstronjeny',
	'removedfavoritetext' => 'Strona "[[:$1]]" bu z [[Special:Favoritelist|twojich faworitow]] wotstronjena.',
	'favorite' => 'Jako faworit přidać',
	'favoritethispage' => 'Tutu stronu jako faworitu přidać',
	'unfavorite' => 'Z faworitow wotstronić',
	'unfavoritethispage' => 'Nic wjace jako faworit njeskładować',
	'favoritelist-options' => 'Faworitowe opcije',
	'favoriteing' => 'Składuje so jako faworit...',
	'unfavoriteing' => 'Faworit so wotstronja...',
	'tooltip-pt-favoritelist' => 'Lisćina stronow, kotruž za změnami přepruwuješ',
	'tooltip-ca-favorite' => 'Tutu stronu twojim faworitam přidać',
	'tooltip-ca-unfavorite' => 'Tutu stronu z twojich faworitow wotstronić',
	'tooltip-favorite' => 'Tutu stronu twojim faworitam přidać',
	'favoritelistall2' => 'wšě',
	'favoritelistedit-numitems' => 'Twoje fawority wobsahuja {{PLUrAL:$1|1 zapisk|$1 zapiskaj|$1 zapiski|$1 zapiskow}}.',
	'favoritelistedit-noitems' => 'Twoje fawority žane zapiski njewobsahuja.',
	'favoritelistedit-normal-title' => 'Fawority wobdźěłać',
	'favoritelistedit-normal-legend' => 'Zapiski z faworitow wotstronić',
	'favoritelistedit-normal-explain' => 'Zapiski w twojich faworitach pokazuja so deleka.
Zo by zapisk wotstronił, markěruj kašćik pódla njeho a klikń na "{{int:Favoritelistedit-normal-submit}}".
Móžeš tež [[Special:Favoritelist/raw|lisćinu surowych faworitow  wobdźěłać]].',
	'favoritelistedit-normal-submit' => 'Zapiski wotstronić',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|1 zapisk bu|$1 zapiskaj buštej|$1 zapiski buchu|$1 zapiskow  bu}} z twojich faworitow {{PLURAL:$1|wotstronjeny|wotstronjenej|wotstronjene|wotstronjene}}:',
	'favoritelistedit-raw-title' => 'Lisćinu surowych faworitow wobdźěłać',
	'favoritelistedit-raw-legend' => 'Lisćinu surowych faworitow wobdźěłać',
	'favoritelistedit-raw-explain' => 'Zapiski w twojich faworitach pokazuja so deleka a dadźa so po rynčkach přidać a wotstronić.
Hdyž sy hotowy, klikń na "{{int:Favoritelistedit-raw-submit}}".
Móžeš tež [[Special:Favoritelist/edit|stndardny editor wužiwać]].',
	'favoritelistedit-raw-titles' => 'Zapiski:',
	'favoritelistedit-raw-submit' => 'Fawority aktualizować',
	'favoritelistedit-raw-done' => 'Twoje fawority su so zaktualizowali.',
	'favoritelistedit-raw-added' => '{{PLURAL:$1|1 zapisk bu dodaty|$1 zapiskaj buštej dodatej|$1 zapiski buchu dodate|$1 zapiskow bu dodate}}:',
	'favoritelistedit-raw-removed' => '{{PLURAL:$1|1 zapisk bu wotstronjeny|$1 zapiskaj buštej wotstronjenej|$1 zapiski buchu wotstronjene|$1 zapiskow bu wotstronjene}}:',
	'favoritelisttools-view' => 'Fawority sej wobhladać',
	'favoritelisttools-edit' => 'Fawority sej wobhladać a wobdźěłać',
	'favoritelisttools-raw' => 'Surowe fawority wobdźěłać',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'favorites-desc' => 'Crear un lista de favorites',
	'favoritethis' => 'Favorir iste pagina',
	'prefs-favoritelist' => 'Favorites',
	'prefs-favoritelist-token' => 'Indicio de favorites:',
	'prefs-advancedfavoritelist' => 'Optiones avantiate',
	'favoritelist' => 'Mi favorites',
	'myfavoritelist' => 'Mi favorites',
	'favoritelistfor' => "(de '''$1''')",
	'nofavoritelist' => 'Tu non ha elementos favorite.',
	'favoritelistanontext' => 'Per favor $1 pro vider o modificar elementos favorite.',
	'favoritenologin' => 'Non identificate',
	'favoritenologintext' => 'Es necessari [[Special:UserLogin|aperir un session]] pro modificar tu favorites.',
	'addedfavorite' => 'Addite al favorites',
	'addedfavoritetext' => 'Le pagina "[[:$1]]" ha essite addite a tu [[Special:Favoritelist|favorites]].',
	'removedfavorite' => 'Removite del favorites',
	'removedfavoritetext' => 'Le pagina "[[:$1]]" ha essite removite de tu [[Special:Favoritelist|your favorites]].',
	'favorite' => 'Favorite',
	'favoritethispage' => 'Favorir iste pagina',
	'unfavorite' => 'Disfavorir',
	'unfavoritethispage' => 'Cessar de favorir',
	'favoritelist-options' => 'Optiones de favorites',
	'favoriteing' => 'Favorir…',
	'unfavoriteing' => 'Disfavorir…',
	'tooltip-pt-favoritelist' => 'Le lista de paginas del quales tu seque le modificationes',
	'tooltip-ca-favorite' => 'Adder iste pagina a tu favorites',
	'tooltip-ca-unfavorite' => 'Remover iste pagina de tu favorites',
	'tooltip-favorite' => 'Adder iste pagina a tu favorites',
	'favoritelistall2' => 'totes',
	'favoritelistedit-numitems' => 'Tu lista de favorites contine {{PLURAL:$1|1 titulo|$1 titulos}}.',
	'favoritelistedit-noitems' => 'Tu non ha titulos favorite.',
	'favoritelistedit-normal-title' => 'Modificar favorites',
	'favoritelistedit-normal-legend' => 'Remover titulos del favorites',
	'favoritelistedit-normal-explain' => 'Le titulos in tu lista de favorites es monstrate hic infra.
Pro eliminar un titulo, marca le quadrato correspondente, e clicca "{{int:Watchlistedit-normal-submit}}".
Tu pote etiam [[Special:Favoritelist/raw|modificar le lista in forma crude]].',
	'favoritelistedit-normal-submit' => 'Remover titulos',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|1 titulo|$1 titulos}} ha essite removite de tu lista de favorites:',
	'favoritelistedit-raw-title' => 'Modificar lista de favorites in forma crude',
	'favoritelistedit-raw-legend' => 'Modificar lista de favorites in forma crude',
	'favoritelistedit-raw-explain' => 'Le titulos in tu lista de favorites es monstrate hic infra, e pote esser modificate per adder e eliminar entratas del lista;
un titulo per linea.
Quando tu ha finite, clicca super "{{int:Favoritelistedit-raw-submit}}".
Tu pote etiam [[Special:Favoritelist/edit|usar le editor standard]].',
	'favoritelistedit-raw-titles' => 'Titulos:',
	'favoritelistedit-raw-submit' => 'Actualisar favorites',
	'favoritelistedit-raw-done' => 'Tu lista de favorites ha essite actualisate.',
	'favoritelistedit-raw-added' => '{{PLURAL:$1|1 titulo|$1 titulos}} ha essite addite:',
	'favoritelistedit-raw-removed' => '{{PLURAL:$1|1 titulo|$1 titulos}} ha essite removite:',
	'favoritelisttools-view' => 'Vider favorites',
	'favoritelisttools-edit' => 'Vider e modificar favorites',
	'favoritelisttools-raw' => 'Modificar lista de favorites in forma crude',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'favorites-desc' => 'Crea una lista di preferiti',
	'favoritethis' => 'Aggiungi questa pagina ai preferiti',
	'prefs-favoritelist' => 'Preferiti',
	'prefs-favoritelist-token' => 'Token preferiti:',
	'prefs-advancedfavoritelist' => 'Opzioni avanzate',
	'favoritelist' => 'I miei preferiti',
	'myfavoritelist' => 'I miei preferiti',
	'favoritelistfor' => "(per '''$1''')",
	'nofavoritelist' => 'La lista dei preferiti è vuota.',
	'favoritelistanontext' => "Per visualizzare e modificare l'elenco dei preferiti è necessario $1.",
	'favoritenologin' => 'Accesso non effettuato',
	'favoritenologintext' => "Per modificare la lista dei preferiti è necessario prima eseguire l'[[Special:UserLogin|accesso al sito]].",
	'addedfavorite' => 'Aggiunto ai preferiti',
	'addedfavoritetext' => 'La pagina "[[:$1]]" è stata aggiunta alla [[Special:Favoritelist|lista dei preferiti]].',
	'removedfavorite' => 'Rimossa dai preferiti',
	'removedfavoritetext' => 'La pagina "[[:$1]]" è stata eliminata dalla [[Special:Favoritelist|lista dei preferiti]].',
	'favorite' => 'Preferito',
	'favoritethispage' => 'Aggiungi questa pagina ai preferiti',
	'favoritelist-options' => 'Opzioni preferiti',
	'tooltip-pt-favoritelist' => 'La lista delle pagine che stai tenendo sotto osservazione',
	'tooltip-ca-favorite' => 'Aggiungi questa pagina ai tuoi preferiti',
	'tooltip-ca-unfavorite' => 'Rimuovi questa pagina dai preferiti',
	'tooltip-favorite' => 'Aggiungi questa pagina ai tuoi preferiti',
	'favoritelistall2' => 'tutte',
	'favoritelistedit-numitems' => 'I tuoi preferiti contengono {{PLURAL:$1|1 titolo|$1 titoli}}.',
	'favoritelistedit-noitems' => 'I tuoi preferiti non contengono titoli.',
	'favoritelistedit-normal-title' => 'Modifica preferiti',
	'favoritelistedit-normal-legend' => 'Elimina titoli dai preferiti',
	'favoritelistedit-normal-explain' => 'Di seguito sono elencate tutte le pagine preferite.
Per rimuovere una o più pagine dalla lista, selezionare le caselle relative e fare clic sul pulsante "{{int:Favoritelistedit-normal-submit}}" in fondo all\'elenco.
Si noti che è anche possibile [[Special:Favoritelist/raw|modificare la lista in formato testuale]].',
	'favoritelistedit-normal-submit' => 'Rimuovi i titoli',
	'favoritelistedit-normal-done' => 'Dalla lista dei preferiti {{PLURAL:$1|è stata eliminata una pagina|sono state eliminate $1 pagine}}:',
	'favoritelistedit-raw-title' => 'Modifica dei preferiti in forma testuale',
	'favoritelistedit-raw-legend' => 'Modifica dei preferiti in forma testuale',
	'favoritelistedit-raw-explain' => 'Di seguito sono elencate tutte le pagine preferite. Per modificare la lista aggiungere o rimuovere i rispettivi titoli, uno per riga.
Una volta terminato, fare clic su "{{int:Favoritelistedit-raw-submit}}" in fondo all\'elenco.
Si noti che è anche possibile [[Special:Favoritelist/edit|modificare la lista con l\'interfaccia standard]].',
	'favoritelistedit-raw-titles' => 'Titoli:',
	'favoritelistedit-raw-submit' => 'Aggiorna preferiti',
	'favoritelistedit-raw-done' => 'I tuoi preferiti sono stati aggiornati.',
	'favoritelistedit-raw-added' => '{{PLURAL:$1|È stata aggiunta una pagina|Sono state aggiunte $1 pagine}}:',
	'favoritelistedit-raw-removed' => '{{PLURAL:$1|È stata eliminata una pagina|Sono state eliminate $1 pagine}}:',
	'favoritelisttools-view' => 'Vedi preferiti',
	'favoritelisttools-edit' => 'Vedi e modifica i preferiti',
	'favoritelisttools-raw' => 'Modifica la lista in formato testo',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'favorites-desc' => 'お気に入り一覧を作成する',
	'favoritethis' => 'このページをお気に入りに追加',
	'prefs-favoritelist' => 'お気に入り',
	'prefs-favoritelist-token' => 'お気に入りのトークン:',
	'prefs-advancedfavoritelist' => '詳細設定',
	'favoritelist' => 'お気に入り',
	'myfavoritelist' => 'お気に入り',
	'favoritenologin' => 'ログインしていません',
	'favoritenologintext' => '自分のお気に入りを変更するには[[Special:UserLogin|ログイン]]する必要があります。',
	'addedfavorite' => 'お気に入りに追加しました',
	'removedfavorite' => 'お気に入りから除去しました',
	'favorite' => 'お気に入り',
	'favoritethispage' => 'このページをお気に入りに追加',
	'unfavorite' => 'お気に入り解除',
	'unfavoritethispage' => 'お気に入りを解除',
	'favoritelist-options' => 'お気に入りのオプション',
	'favoriteing' => 'お気に入りに追加しています...',
	'unfavoriteing' => 'お気に入りを解除しています...',
	'tooltip-ca-favorite' => 'このページをお気に入りに追加',
	'tooltip-ca-unfavorite' => 'このページをお気に入りから除去',
	'tooltip-favorite' => 'このページをお気に入りに追加',
	'favoritelistall2' => 'すべて',
	'favoritelistedit-normal-title' => 'お気に入りを編集',
	'favoritelistedit-raw-title' => 'お気に入り一覧をテキストで編集',
	'favoritelistedit-raw-legend' => 'お気に入り一覧をテキストで編集',
	'favoritelistedit-raw-submit' => 'お気に入りを更新',
	'favoritelistedit-raw-done' => 'お気に入りを更新しました。',
	'favoritelisttools-view' => 'お気に入りを表示',
	'favoritelisttools-edit' => 'お気に入りを表示/編集',
	'favoritelisttools-raw' => 'お気に入りをテキストで編集',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'prefs-favoritelist' => 'რჩეულები',
	'favoritelist' => 'ჩემი რჩეულები',
	'myfavoritelist' => 'ჩემი რჩეულები',
	'favoritelistfor' => "('''$1'''-თვის)",
	'favorite' => 'რჩეული',
	'favoritelistall2' => 'ყველა',
	'favoritelistedit-normal-title' => 'რჩეულების რედაქტირება',
	'favoritelistedit-raw-titles' => 'სათაურები:',
	'favoritelistedit-raw-submit' => 'რჩეულების განახლება',
	'favoritelisttools-view' => 'რჩეულების ხილვა',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'favorites-desc' => 'Määd en päsöhnlesche Leß met leevste Sigge müjjelesch.',
	'favoritethis' => 'Heh di Sigg op di Leß met de leevste Sigge säze',
	'prefs-favoritelist' => 'Leevßte Sigge',
	'prefs-favoritelist-token' => 'Et Kennzeiche för Ding Lesezeiche:',
	'prefs-advancedfavoritelist' => 'Extra Enschtällonge',
	'favoritelist' => 'MIn leevste Sigge',
	'myfavoritelist' => 'MIng leevste Sigge',
	'favoritelistfor' => "(för '''$1''')",
	'nofavoritelist' => 'Do häs kein leevste Sigge enjedraare.',
	'favoritelistanontext' => 'Do moß $1, domet de en Ding Leß met de leevßte Sigge erenluure kanns, oder jet dran ändere.',
	'favoritenologin' => 'Nit enjelogg',
	'favoritenologintext' => 'Öm Ding leevste Sigge ze ändere, mööts de ald [[Special:UserLogin|enjelogg]] sin.',
	'addedfavorite' => 'Op de Leß met de leevste Sigge jesaz',
	'addedfavoritetext' => 'Di Sigg „[[:$1]]“ es jäz op de Leß met Dinge [[Special:Favoritelist|leevste Sigge]] jesaz..',
	'removedfavorite' => 'Vun dä Leß met de leevste Sigge fott jenumme.',
	'removedfavoritetext' => 'Di Sigg „[[:$1]]“ es jäz vun dä Leß met Dinge [[Special:Favoritelist|leevste Sigge]] jenumme..',
	'favorite' => 'En de leevßte Sigge donn',
	'favoritethispage' => 'Heh di Sigg op di Leß met de leevste Sigge säze',
	'unfavorite' => 'Vun de leevßte Sigge fottnämme',
	'tooltip-ca-favorite' => 'Don di Sigg en Ding leevste Sigge opnämme',
	'tooltip-ca-unfavorite' => 'Schmiiß di Sigg uß Dinge leevste Sigge eruß',
	'tooltip-favorite' => 'Don di Sigg en Ding leevste Sigge opnämme',
	'favoritelistall2' => 'all',
	'favoritelistedit-numitems' => 'Ding Leß met de leevste Sigge hät {{PLURAL:$1|eine Endraach|$1 Endrääsch|kein Endrääsch}}.',
	'favoritelistedit-noitems' => 'Ding Leß met leevste Sigge es läddesch.',
	'favoritelistedit-normal-title' => 'De leevste Sigge beärbeide',
	'favoritelistedit-normal-legend' => 'Tittelle vun de leevste Sigge fott nämme',
	'favoritelistedit-normal-explain' => 'Dat sin de Endräch in Dinge Leß met de leevste Sigge.
Öm einzel Titelle loßß ze wääde, don Hökche en de Kässjer nevve inne maache, un dann deuß De dä Knopp „{{int:favoritelistedit-normal-submit}}“.
Do kanns Ding Leß met de leevste Sigge och [[Special:Favoritelist/raw|en rüh beärbeide]].',
	'favoritelistedit-normal-submit' => 'Tettelle eruß schmieße',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|Eine Sigge-Tettel es|$1 Sigge-Tettele sin|Keine Sigge-Tettel es}} us Dinge Leß met de leevßde Sigge eruß jefloore:',
	'favoritelistedit-raw-titles' => 'Tettele:',
	'favoritelisttools-view' => 'De leevßde Sigge aanloore',
	'favoritelisttools-edit' => 'De leevßde Sigge aanloore un ändere',
	'favoritelisttools-raw' => 'De leevßde Sigge ändere',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'favorites-desc' => 'Eng Lescht mat Favoriten uleeën',
	'favoritethis' => 'Dës Säit bäi meng Favoriten derbäisetzen',
	'prefs-favoritelist' => 'Favoriten',
	'prefs-favoritelist-token' => 'Favoriten-Token:',
	'prefs-advancedfavoritelist' => 'Méi Optiounen',
	'favoritelist' => 'Meng Favoriten',
	'myfavoritelist' => 'Meng Favoriten',
	'favoritelistfor' => "(fir '''$1''')",
	'nofavoritelist' => 'Är Lëscht vun de Favoriten ass eidel.',
	'favoritelistanontext' => "Dir musst Iech $1 fir d'Lëscht vun Äre Favoriten ze gesinn oder z'änneren.",
	'favoritenologin' => 'Net ageloggt',
	'favoritenologintext' => "Dir musst [[Special:UserLogin|ageloggt sinn]], fir Är Favoriten z'änneren.",
	'addedfavorite' => "Bäi d'Favoriten derbäigesat",
	'addedfavoritetext' => 'D\'Säit "[[:$1]]" gouf bäi Är [[Special:Favoritelist|Favoriten]] derbäigesat.',
	'removedfavorite' => 'Vun der Lëscht vun de Favoriten erofgeholl',
	'removedfavoritetext' => 'D\'Säit "[[:$1]]" gouf vun [[Special:Favoritelist|ärer Lëscht vun de Favoriten]] erofgeholl.',
	'favorite' => "Op d'Lëscht vun de Favoriten derbäisetzen",
	'favoritethispage' => 'Dës Säit bäi meng Favoriten derbäisetzen',
	'unfavorite' => 'Vun der Lëscht vun de Favoriten erofhuelen',
	'unfavoritethispage' => 'Dës Säit vu menge Favoriten ewechhuelen',
	'favoritelist-options' => 'Optioune vun de Favoriten',
	'favoriteing' => 'Späicheren...',
	'unfavoriteing' => 'Erofhuelen...',
	'tooltip-pt-favoritelist' => 'Lëscht vu Säiten, bei deenen Dir op Ännerungen oppasst',
	'tooltip-ca-favorite' => "Setzt dës Säit op d'Lëscht vun Äre Favoriten derbäi",
	'tooltip-ca-unfavorite' => 'Dës Säit vun der Lëscht vun Äre Favoriten erofhuelen?',
	'tooltip-favorite' => "Dës Säit op d'Lëscht vun Äre Favoriten derbäisetzen",
	'favoritelistall2' => 'all',
	'favoritelistedit-numitems' => 'An der Lëscht vun Äre {{PLURAL:$1|Favoriten ass 1 Titel|Favorite sinn $1 Titelen}}.',
	'favoritelistedit-noitems' => 'De Lëscht vun Äre Favoriten ass eidel.',
	'favoritelistedit-normal-title' => 'Lëscht vun de Favoriten änneren',
	'favoritelistedit-normal-legend' => 'Säite vun der Lëscht vun de Favoriten erofhuelen',
	'favoritelistedit-normal-explain' => 'D\'Säite vun der Lëscht vun Äre Favorite stinn hei drënner.
Fir eng Säit ewechzehuelen, klickt op d\'Haischen niewendrun a klickt duerno op "{{int:Favoritelistedit-normal-submit}}".
Dir kënnt och [[Special:Favoritelist/raw|déi net-formatéiert Lëscht änneren]].',
	'favoritelistedit-normal-submit' => 'Säiten erofhuelen',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|1 Säit gouf|$1 Säite goufe}} vun der Lëscht vun Äre Favoriten erofgeholl:',
	'favoritelistedit-raw-title' => 'Net-formatéiert Favoritelëscht änneren',
	'favoritelistedit-raw-legend' => 'Net-formatéiert Favoritelëscht änneren',
	'favoritelistedit-raw-explain' => "D'Titele vun Äre Favorite ginn hei drënner gewisen a kënne geännert ginn andeems der d'Säiten op d'Lëscht derbäisetze oder erofhuelt; eng Säit pro Linn.
Wann Dir fäerdeg sidd, klickt \"{{int:Favoritelistedit-raw-submit}}\".
Dir kënnt och [[Special:Favoritelist/edit|de Standard Editeur benotzen]].",
	'favoritelistedit-raw-titles' => 'Säiten:',
	'favoritelistedit-raw-submit' => 'Lëscht vun de Favoriten aktualiséieren',
	'favoritelistedit-raw-done' => "D'Lëscht vun Äre Favorite gouf aktualiséiert.",
	'favoritelistedit-raw-added' => '{{PLURAL:$1|1 Säit gouf|$1 Säite goufen}} derbäigesat:',
	'favoritelistedit-raw-removed' => '{{PLURAL:$1|1 Säit gouf|$1 Säite goufen}} ewechgeholl:',
	'favoritelisttools-view' => 'Favorite weisen',
	'favoritelisttools-edit' => 'Lëscht vun de Favorite weisen an änneren',
	'favoritelisttools-raw' => 'Lëscht vun de Favoriten net-formatéiert änneren',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'favoritethis' => 'Pridėti puslapį į mėgstamus',
	'prefs-favoritelist' => 'Mėgstamiausi',
	'prefs-advancedfavoritelist' => 'Papildomi nustatymai',
	'favoritelist' => 'Mano mėgstamiausi',
	'myfavoritelist' => 'Mano mėgstamiausi',
	'favoritelistfor' => "(dėl '''$1''')",
	'addedfavorite' => 'Pridėtas į mėgstamiausius',
	'removedfavorite' => 'Pašalintas iš mėgstamiausių',
	'favorite' => 'Mėgstamas',
	'favoritethispage' => 'Pridėti puslapį į mėgstamus',
	'favoritelist-options' => 'Mėgstamiausių nustatymai',
	'favoritelistall2' => 'visi',
	'favoritelistedit-normal-title' => 'Redaguoti mėgstamiausius',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'favorites-desc' => 'Создај список на бендисани',
	'favoritethis' => 'Бендисај ја станицава',
	'prefs-favoritelist' => 'Бендисани',
	'prefs-favoritelist-token' => 'Жетон за бендисани:',
	'prefs-advancedfavoritelist' => 'Напредни поставки',
	'favoritelist' => 'Мои бендисани',
	'myfavoritelist' => 'Мои бендисани',
	'favoritelistfor' => "(за '''$1''')",
	'nofavoritelist' => 'Немате бендисани.',
	'favoritelistanontext' => '$1 за да ги погледате или уредите бендисаните.',
	'favoritenologin' => 'Не сте најавени',
	'favoritenologintext' => 'Мора да сте [[Special:UserLogin|најавени]] за да можете да ги менувате бендисаните.',
	'addedfavorite' => 'Додадено во бендисаните',
	'addedfavoritetext' => 'Страницата „[[:$1]]“ е додадена во [[Special:Favoritelist|бендисаните]].',
	'removedfavorite' => 'Отстрането од бендисаните',
	'removedfavoritetext' => 'Страницата „[[:$1]]“ е отстранета од [[Special:Favoritelist|бендисаните]].',
	'favorite' => 'Бендисај',
	'favoritethispage' => 'Бендисај ја страницава',
	'unfavorite' => 'Одбендисај',
	'unfavoritethispage' => 'Одбендисај ја страницава',
	'favoritelist-options' => 'Поставки за бендисани',
	'favoriteing' => 'Бендисувам...',
	'unfavoriteing' => 'Одбендисувам...',
	'tooltip-pt-favoritelist' => 'Список на страници кои сте избрале да ги набљудувате',
	'tooltip-ca-favorite' => 'Додај ја страницава во бендисаните',
	'tooltip-ca-unfavorite' => 'Отстрани ја страницава од бендисаните',
	'tooltip-favorite' => 'Додај ја страницава во бендисаните',
	'favoritelistall2' => 'сите',
	'favoritelistedit-numitems' => 'Во бендисаните има {{PLURAL:$1|1 наслов|$1 наслови}}.',
	'favoritelistedit-noitems' => 'Немате наслови во бендисаните.',
	'favoritelistedit-normal-title' => 'Уреди бендисани',
	'favoritelistedit-normal-legend' => 'Отстрани наслови од бендисаните',
	'favoritelistedit-normal-explain' => 'Насловите во вашиот список на набљудувања се прикажани подолу.
За да избришете наслов, штиклирајте го квадратчето лево од насловот, и стиснете на „{{int:Favoritelistedit-normal-submit}}“.
Можете да го [[Special:Favoritelist/raw|уредите сировниот список]].',
	'favoritelistedit-normal-submit' => 'Отстрани наслови',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|1 наслов|$1 наслови}} се отстранети од бендисаните:',
	'favoritelistedit-raw-title' => 'Уреди сиров список на бендисани',
	'favoritelistedit-raw-legend' => 'Уреди сиров список на бендисани',
	'favoritelistedit-raw-explain' => 'Насловите во бендисаните се прикажани подолу, и можат да се уредуваат со додавање или бришење на ставки од списокот;
по еден наслов во секој ред.
Кога ќе завршите, стиснете на „{{int:Favoritelistedit-raw-submit}}“.
Можете и да го [[Special:Favoritelist/edit|употребите обичниот уредник]].',
	'favoritelistedit-raw-titles' => 'Наслови:',
	'favoritelistedit-raw-submit' => 'Поднови бендисани',
	'favoritelistedit-raw-done' => 'Бендисаните се подновени.',
	'favoritelistedit-raw-added' => '{{PLURAL:$1|Додаден е 1 наслов|Додадени се $1 наслови}}:',
	'favoritelistedit-raw-removed' => '{{PLURAL:$1|Отстранет е 1 наслов|Отстранети се $1 наслови}}:',
	'favoritelisttools-view' => 'Погледај „Бендисани“',
	'favoritelisttools-edit' => 'Погледај и уреди „Бендисани“',
	'favoritelisttools-raw' => 'Уреди сирови бендисани',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'favorites-desc' => 'പ്രിയങ്കരങ്ങളായ താളുകളുടെ പട്ടിക സൃഷ്ടിക്കുന്നു',
	'favoritethis' => 'ഈ താൾ പ്രിയങ്കരമാക്കുക',
	'prefs-favoritelist' => 'പ്രിയങ്കരങ്ങൾ',
	'prefs-favoritelist-token' => 'പ്രിയങ്കരമാക്കിയതിന്റെ ചീട്ട്:',
	'prefs-advancedfavoritelist' => 'വിപുലമായ ഉപാധികൾ',
	'favoritelist' => 'എനിക്കു പ്രിയങ്കരമായവ',
	'myfavoritelist' => 'എനിക്കു പ്രിയങ്കരമായവ',
	'favoritelistfor' => "('''$1''' എന്നതിന്)",
	'nofavoritelist' => 'താങ്കളുടെ പ്രിയങ്കരങ്ങളിൽ ഇനങ്ങളൊന്നുമില്ല.',
	'favoritelistanontext' => 'താങ്കളുടെ പ്രിയങ്കരങ്ങൾ കാണുവാനോ തിരുത്തുവാനോ $1 ചെയ്യുക.',
	'favoritenologin' => 'പ്രവേശിച്ചിട്ടില്ല',
	'favoritenologintext' => 'താങ്കളുടെ പ്രിയങ്കരങ്ങൾ തിരുത്തുവാൻ താങ്കൾ [[Special:UserLogin|ലോഗിൻ]] ചെയ്തിരിക്കണം.',
	'addedfavorite' => 'പ്രിയങ്കരങ്ങളിലേയ്ക്ക് ചേർത്തു',
	'addedfavoritetext' => '"[[:$1]]" എന്ന ഈ താൾ താങ്കളുടെ [[Special:Favoritelist|പ്രിയങ്കരങ്ങളിലേയ്ക്ക്]] ചേർത്തു.',
	'removedfavorite' => 'പ്രിയങ്കരങ്ങളിൽ നിന്ന് നീക്കം ചെയ്തു',
	'removedfavoritetext' => '[[Special:Favoritelist|താങ്കളുടെ പ്രിയങ്കരങ്ങളിൽ]] നിന്നും "[[:$1]]" എന്ന താൾ നീക്കം ചെയ്തിരിക്കുന്നു.',
	'favorite' => 'പ്രിയങ്കരം',
	'favoritethispage' => 'ഈ താൾ പ്രിയങ്കരമാക്കുക',
	'unfavorite' => 'പ്രിയങ്കരമല്ലാതാക്കുക',
	'unfavoritethispage' => 'പ്രിയങ്കരമാക്കൽ അവസാനിപ്പിക്കുക',
	'favoritelist-options' => 'പ്രിയങ്കരമാക്കലിന്റെ ഐച്ഛികങ്ങൾ',
	'favoriteing' => 'പ്രിയങ്കരമാക്കുന്നു...',
	'unfavoriteing' => 'പ്രിയങ്കരമല്ലാതാക്കുന്നു...',
	'tooltip-pt-favoritelist' => 'താങ്കൾ മാറ്റങ്ങൾ ശ്രദ്ധിക്കുന്ന താളുകളുടെ പട്ടിക',
	'tooltip-ca-favorite' => 'ഈ താൾ താങ്കളുടെ പ്രിയങ്കരങ്ങളിലേയ്ക്ക് ചേർക്കുക',
	'tooltip-ca-unfavorite' => 'ഈ താൾ താങ്കളുടെ പ്രിയങ്കരങ്ങളിൽ നിന്ന് നീക്കം ചെയ്യുക',
	'tooltip-favorite' => 'ഈ താൾ താങ്കളുടെ പ്രിയങ്കരങ്ങളിലേയ്ക്ക് ചേർക്കുക',
	'favoritelistall2' => 'എല്ലാം',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'favorites-desc' => 'Maakt het mogelijk om favorietenlijst aanmaken',
	'favoritethis' => 'Pagina in favorietenlijst opnemen',
	'prefs-favoritelist' => 'Favorieten',
	'prefs-favoritelist-token' => 'Favorietensleutel:',
	'prefs-advancedfavoritelist' => 'Gevorderde instellingen',
	'favoritelist' => 'Mijn favorieten',
	'myfavoritelist' => 'Mijn favorieten',
	'favoritelistfor' => "(voor '''$1''')",
	'nofavoritelist' => "U hebt geen pagina's in uw favorietenlijst opgenomen.",
	'favoritelistanontext' => 'Om uw favorieten te bekijken of te bewerken moet u zich $1.',
	'favoritenologin' => 'Niet aangemeld',
	'favoritenologintext' => '[[Special:UserLogin|Meld u aan]] om uw favorietenlijst te bewerken.',
	'addedfavorite' => 'Toegevoegd aan favorieten',
	'addedfavoritetext' => 'De pagina "[[:$1]]" is toegevoegd aan uw [[Special:Favoritelist|favorieten]].',
	'removedfavorite' => 'Verwijderd uit favorieten',
	'removedfavoritetext' => 'De pagina "[[:$1]]" is toegevoegd uit uw [[Special:Favoritelist|favorieten]] verwijderd.',
	'favorite' => 'Naar favorieten',
	'favoritethispage' => 'Pagina in favorietenlijst opnemen',
	'unfavorite' => 'Uit favorieten',
	'unfavoritethispage' => 'Pagina uit favorietenlijst verwijderen',
	'favoritelist-options' => 'Instellingen voor favorietenlijst',
	'favoriteing' => 'In favorietenlijst plaatsen...',
	'unfavoriteing' => 'Uit favorietenlijst aan het verwijderen...',
	'tooltip-pt-favoritelist' => "De lijst met pagina's waarvan u de wijzigingen volgt.",
	'tooltip-ca-favorite' => 'Deze pagina toevoegen aan uw favorieten',
	'tooltip-ca-unfavorite' => 'Deze pagina uit uw favorieten verwijderen',
	'tooltip-favorite' => 'Deze pagina toevoegen aan uw favorieten',
	'favoritelistall2' => 'alle',
	'favoritelistedit-numitems' => "Uw favorietenlijst bevat {{PLURAL:$1|1 pagina|$1 pagina's}}.",
	'favoritelistedit-noitems' => "Er zijn geen pagina's opgenomen in uw favorietenlijst.",
	'favoritelistedit-normal-title' => 'Favorieten bewerken',
	'favoritelistedit-normal-legend' => "Pagina's uit favorietenlijst verwijderen",
	'favoritelistedit-normal-explain' => 'Hieronder worden de pagina’s in uw favorietenlijst weergegeven.
Klik op het vinkvakje ernaast en daarna op "{{int:Favoritelistedit-normal-submit}}" om een pagina te verwijderen.
U kunt ook de [[Special:Favoritelist/raw|ruwe lijst bewerken]].',
	'favoritelistedit-normal-submit' => "Pagina's verwijderen",
	'favoritelistedit-normal-done' => 'Er {{PLURAL:$1|is 1 pagina|zijn $1 pagina’s}} verwijderd uit uw favorieten:',
	'favoritelistedit-raw-title' => 'Ruwe favorietenlijst bewerken',
	'favoritelistedit-raw-legend' => 'Ruwe favorietenlijst bewerken',
	'favoritelistedit-raw-explain' => 'Hieronder staan pagina’s uit uw favorietenlijst.
U kunt de lijst bewerken door pagina’s te verwijderen en toe te voegen.
Eén pagina per regel.
Als u klaar bent, klik dan op "{{int:Favoritelistedit-raw-submit}}".
U kunt ook [[Special:Favoritelist/edit|het standaard bewerkingsscherm gebruiken]].',
	'favoritelistedit-raw-titles' => 'Pagina’s:',
	'favoritelistedit-raw-submit' => 'Favorieten bijwerken',
	'favoritelistedit-raw-done' => 'Uw favorieten zijn bijgewerkt.',
	'favoritelistedit-raw-added' => 'Er {{PLURAL:$1|is 1 pagina|zijn $1 pagina’s}} toegevoegd:',
	'favoritelistedit-raw-removed' => 'Er {{PLURAL:$1|is 1 pagina|zijn $1 pagina’s}} verwijderd:',
	'favoritelisttools-view' => 'Favorieten bekijken',
	'favoritelisttools-edit' => 'Favorieten bekijken en bewerken',
	'favoritelisttools-raw' => 'Ruwe favorietenlijst bewerken',
);

/** Nederlands (informeel)‎ (Nederlands (informeel)‎)
 * @author Siebrand
 */
$messages['nl-informal'] = array(
	'favoritelistanontext' => 'Om je favorieten te bekijken of te bewerken moet je je $1.',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'favoritelistfor' => "(fer '''$1''')",
	'favoritelistall2' => 'all',
);

/** Polish (polski)
 * @author Sp5uhe
 * @author Woytecr
 */
$messages['pl'] = array(
	'favorites-desc' => 'Tworzenie listy ulubionych',
	'favoritethis' => 'Dodaj tę stronę do ulubionych',
	'prefs-favoritelist' => 'Ulubione',
	'prefs-favoritelist-token' => 'Klucz listy ulubionych',
	'prefs-advancedfavoritelist' => 'Opcje zaawansowane',
	'favoritelist' => 'Moje ulubione',
	'myfavoritelist' => 'Moje ulubione',
	'favoritelistfor' => "(dla '''$1''')",
	'nofavoritelist' => 'Nie masz żadnych pozycji na swojej liście ulubionych.',
	'favoritelistanontext' => 'Musisz $1 jeśli chcesz zobaczyć lub zmienić pozycje swojej listy ulubionych.',
	'favoritenologin' => 'Nie jesteś zalogowany',
	'favoritenologintext' => 'Musisz się [[Special:UserLogin|zalogować]], aby mieć możliwość modyfikacji swojej listy ulubionych.',
	'addedfavorite' => 'Dodano do ulubionych',
	'addedfavoritetext' => 'Strona „[[:$1]]“ została dodana do [[Special:Favoritelist|ulubionych]].',
	'removedfavorite' => 'Usunięto z ulubionych',
	'removedfavoritetext' => 'Strona „[[:$1]]“ została usunięta z Twojej listy [[Special:Favoritelist|ulubionych]].',
	'favorite' => 'Ulubione',
	'favoritethispage' => 'Dodaj tę stronę do ulubionych',
	'unfavorite' => 'Usuń z ulubionych',
	'unfavoritethispage' => 'Usuń tę stronę z ulubionych',
	'favoritelist-options' => 'Opcje ulubionych',
	'favoriteing' => 'Dodawanie do ulubionych...',
	'unfavoriteing' => 'Usuwanie z ulubionych...',
	'tooltip-pt-favoritelist' => 'Lista stron, których zmiany treści są obserwowane przez Ciebie',
	'tooltip-ca-favorite' => 'Dodaj tę stronę do ulubionych',
	'tooltip-ca-unfavorite' => 'Usuń tę stronę z ulubionych',
	'tooltip-favorite' => 'Dodaj tę stronę do ulubionych',
	'favoritelistall2' => 'wszystkie',
	'favoritelistedit-numitems' => 'Twoja lista ulubionych zawiera {{PLURAL:$1|1 tytuł|$1 tytuły|$1 tytułów}}.',
	'favoritelistedit-noitems' => 'Twoja lista ulubionych nie zawiera żadnych tytułów.',
	'favoritelistedit-normal-title' => 'Edycja listy ulubionych',
	'favoritelistedit-normal-legend' => 'Usuń tytuły z ulubionych',
	'favoritelistedit-normal-explain' => 'Poniżej pokazano tytuły znajdujące się na Twojej liście ulubionych.
Aby usunąć tytuł, zaznacz pole obok niego, a następnie kliknij „{{int:Favoritelistedit-normal-submit}}“.
Możesz również [[Special:Favoritelist/raw|edytować tekstową listę]].',
	'favoritelistedit-normal-submit' => 'Usuń tytuły',
	'favoritelistedit-normal-done' => 'Usunięto {{PLURAL:$1|1 tytuł |$1 tytuły|$1 tytułów}} z Twojej listy ulubionych:',
	'favoritelistedit-raw-title' => 'Edycja tekstowa listy ulubionych',
	'favoritelistedit-raw-legend' => 'Edycja tekstowa listy ulubionych',
	'favoritelistedit-raw-explain' => 'Poniżej pokazano tytuły znajdujące się na Twojej liście ulubionych. Mogą być edytowane poprzez dodawanie lub usuwanie z listy;
jedna linia zawiera jeden tytuł.
Gdy zakończysz, kliknij „{{int:Favoritelistedit-raw-submit}}“.
Możesz również [[Special:Favoritelist/edit|użyć standardowego edytora]].',
	'favoritelistedit-raw-titles' => 'Tytuły:',
	'favoritelistedit-raw-submit' => 'Aktualizuj ulubione',
	'favoritelistedit-raw-done' => 'Twoja lista ulubionych została zaktualizowana.',
	'favoritelistedit-raw-added' => 'Dodano {{PLURAL:$1|1 tytuł|$1 tytuły|$1 tytułów}}:',
	'favoritelistedit-raw-removed' => 'Usunięto {{PLURAL:$1|1 tytuł|$1 tytuły|$1 tytułów}}:',
	'favoritelisttools-view' => 'Wyświetl ulubione',
	'favoritelisttools-edit' => 'Przeglądanie i edycja ulubionych',
	'favoritelisttools-raw' => 'Edycja tekstowa listy ulubionych',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'favoritethis' => 'دا مخ خواپوری کول',
	'prefs-favoritelist' => 'خواپوري',
	'prefs-advancedfavoritelist' => 'پرمختللې خوښنې',
	'favoritelist' => 'زما خواپوري',
	'myfavoritelist' => 'زما خواپوري',
	'favoritenologin' => 'غونډال کې نه ياست ننوتي',
	'addedfavorite' => 'خواپورو کې ورګډ شول',
	'addedfavoritetext' => 'د "[[:$1]]" مخ ستاسې [[Special:Favoritelist|خواپورو]] کې ورګډ شو.',
	'removedfavorite' => 'له خواپورو لرې کول',
	'removedfavoritetext' => 'د "[[:$1]]" مخ ستاسې [[Special:Favoritelist|خواپورو]] نه لرې شو.',
	'favorite' => 'خواپوری',
	'favoritethispage' => 'دا مخ خواپوری کول',
	'unfavorite' => 'ناخواپوری',
	'unfavoritethispage' => 'خواپورې کېدنه درول',
	'favoritelist-options' => 'خواپورې خوښنې',
	'favoriteing' => 'خواپورې کېدنې کې دی...',
	'unfavoriteing' => 'ناخواپورې کېدنې کې دی...',
	'tooltip-ca-favorite' => 'دا مخ خپلو خواپورو کې ورګډول',
	'tooltip-favorite' => 'دا مخ خپلو خواپورو کې ورګډول',
	'favoritelistall2' => 'ټول',
	'favoritelistedit-normal-title' => 'خواپورې سمول',
	'favoritelistedit-normal-submit' => 'سرليکونه لرې کول',
	'favoritelistedit-raw-titles' => 'سرليکونه:',
	'favoritelistedit-raw-submit' => 'خواپوري اوسمهالول',
	'favoritelisttools-view' => 'خواپوري کتل',
);

/** Portuguese (português)
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'favorites-desc' => 'Criar uma lista de páginas preferidas',
	'favoritethis' => 'Adicionar esta página às preferidas',
	'prefs-favoritelist' => 'Preferidas',
	'prefs-favoritelist-token' => 'Senha secreta da lista de páginas preferidas:',
	'prefs-advancedfavoritelist' => 'Opções avançadas',
	'favoritelist' => 'Preferidas',
	'myfavoritelist' => 'Preferidas',
	'favoritelistfor' => "(de '''$1''')",
	'nofavoritelist' => 'A lista de páginas preferidas está vazia.',
	'favoritelistanontext' => '$1 para ver ou editar a lista de páginas preferidas.',
	'favoritenologin' => 'Não está autenticado',
	'favoritenologintext' => 'Precisa de estar [[Special:UserLogin|autenticado]] para modificar a sua lista de páginas preferidas.',
	'addedfavorite' => 'Adicionada às preferidas',
	'addedfavoritetext' => 'A página "[[:$1]]" foi adicionada à sua lista de [[Special:Favoritelist|páginas preferidas]].',
	'removedfavorite' => 'Removida das preferidas',
	'removedfavoritetext' => 'A página "[[:$1]]" foi removida da sua lista de [[Special:Favoritelist|páginas preferidas]].',
	'favorite' => 'Preferida',
	'favoritethispage' => 'Adicionar esta página às preferidas',
	'unfavorite' => 'Remover esta página das preferidas',
	'unfavoritethispage' => 'Remover das preferidas',
	'favoritelist-options' => 'Opções das páginas preferidas',
	'favoriteing' => 'A adicionar às preferidas...',
	'unfavoriteing' => 'A remover das preferidas...',
	'tooltip-pt-favoritelist' => 'A lista das páginas cujas mudanças está a monitorizar',
	'tooltip-ca-favorite' => 'Adicionar esta página às suas páginas preferidas',
	'tooltip-ca-unfavorite' => 'Remover esta página das páginas preferidas',
	'tooltip-favorite' => 'Adicionar esta página às suas preferidas',
	'favoritelistall2' => 'todas',
	'favoritelistedit-numitems' => 'A sua lista de páginas preferidas contém {{PLURAL:$1|uma página|$1 páginas}}.',
	'favoritelistedit-noitems' => 'A sua lista de página preferidas está vazia.',
	'favoritelistedit-normal-title' => 'Editar a lista de preferidas',
	'favoritelistedit-normal-legend' => 'Remover páginas das preferidas',
	'favoritelistedit-normal-explain' => 'As suas páginas preferidas são listadas abaixo.
Para remover uma página, marque a caixa de selecção correspondente e clique o botão "{{int:Favoritelistedit-normal-submit}}".
Também pode [[Special:Favoritelist/raw|editar a lista em forma de texto]].',
	'favoritelistedit-normal-submit' => 'Remover páginas',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|Foi removida uma página|Foram removidas $1 páginas}} da sua lista de páginas preferidas:',
	'favoritelistedit-raw-title' => 'Editar a lista de preferidas em forma de texto',
	'favoritelistedit-raw-legend' => 'Editar a lista de preferidas em forma de texto',
	'favoritelistedit-raw-explain' => 'A lista de páginas preferidas é apresentada abaixo e pode editá-la, adicionando ou removendo páginas;
uma página por linha.
Quando terminar, clique "{{int:Favoritelistedit-raw-submit}}".
Também pode [[Special:Favoritelist/edit|editar a lista da maneira convencional]].',
	'favoritelistedit-raw-titles' => 'Páginas:',
	'favoritelistedit-raw-submit' => 'Actualizar as preferidas',
	'favoritelistedit-raw-done' => 'A sua lista de páginas preferidas foi actualizada.',
	'favoritelistedit-raw-added' => '{{PLURAL:$1|Foi adicionada uma página|Foram adicionadas $1 páginas}}:',
	'favoritelistedit-raw-removed' => '{{PLURAL:$1|Foi removida uma página|Foram removidas $1 páginas}}:',
	'favoritelisttools-view' => 'Ver Páginas Preferidas',
	'favoritelisttools-edit' => 'Ver e editar a lista de páginas preferidas',
	'favoritelisttools-raw' => 'Editar a lista de preferidas em forma de texto',
);

/** Romanian (română)
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'favoritethispage' => 'Adaugă pagina la favorite',
	'favoritelistedit-raw-titles' => 'Titluri:',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'prefs-favoritelist' => 'Preferite',
	'favoritenologin' => 'Non ge sì collegate',
	'favorite' => 'Preferite',
	'favoritelistall2' => 'tutte',
	'favoritelistedit-normal-submit' => 'Live le titole',
);

/** Russian (русский)
 * @author Alexandr Efremov
 * @author Eleferen
 * @author Express2000
 */
$messages['ru'] = array(
	'favorites-desc' => 'Создание списка «Избранное»',
	'favoritethis' => 'Добавить эту страницу в список наблюдения',
	'prefs-favoritelist' => 'Список наблюдения',
	'prefs-favoritelist-token' => 'Маркер списка наблюдения',
	'prefs-advancedfavoritelist' => 'Дополнительные настройки',
	'favoritelist' => 'Мое избранное',
	'myfavoritelist' => 'Мой список наблюдения',
	'favoritelistfor' => "(для '''$1''')",
	'nofavoritelist' => 'Ваш список наблюдения пуст',
	'favoritelistanontext' => 'Вы должны $1, чтобы просмотреть или отредактировать список наблюдения.',
	'favoritenologin' => 'Вы не представились системе',
	'favoritenologintext' => 'Вы должны [[Special:UserLogin|представиться системе]] для изменения списка наблюдения.',
	'addedfavorite' => 'Добавлено в список наблюдения',
	'addedfavoritetext' => 'Страница "[[:$1]]" была добавлена в Ваш [[Special:Favoritelist|список наблюдения]].',
	'removedfavorite' => 'Удалено из списка наблюдения',
	'removedfavoritetext' => 'Страница "[[:$1]]" была удалена из Вашего [[Special:Favoritelist|списка наблюдения]].',
	'favorite' => 'Наблюдать',
	'favoritethispage' => 'Добавить эту страницу в список наблюдения',
	'unfavorite' => 'Убрать из списка наблюдения',
	'unfavoritethispage' => 'Остановить добавление в список наблюдения',
	'favoritelist-options' => 'Настройки списка наблюдения',
	'favoriteing' => 'Добавление в список наблюдения...',
	'unfavoriteing' => 'Удаление из списка наблюдения...',
	'tooltip-pt-favoritelist' => 'Список страниц, изменения в которых вы отслеживаете',
	'tooltip-ca-favorite' => 'Добавить эту страницу в список наблюдения',
	'tooltip-ca-unfavorite' => 'Удалить эту страницу из списка наблюдения',
	'tooltip-favorite' => 'Добавить эту страницу в список наблюдения',
	'favoritelistall2' => 'все',
	'favoritelistedit-numitems' => 'Ваш список наблюдения содержит {{PLURAL:$1|1 страницу|$1 страниц(ы)}}.',
	'favoritelistedit-noitems' => 'Ваш список наблюдения пуст.',
	'favoritelistedit-normal-title' => 'Редактировать список наблюдения',
	'favoritelistedit-normal-legend' => 'Удалить заголовки из списка наблюдения',
	'favoritelistedit-normal-explain' => 'Ниже перечислены страницы, находящиеся в списке наблюдения.
Для удаления записей отметьте галочкой соответствующие позиции и нажмите кнопку "{{int:Favoritelistedit-normal-submit}}".
Вы также можете [[Special:Favoritelist/raw|править список как текст]].',
	'favoritelistedit-normal-submit' => 'Удалить записи',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|1 запись была удалена|$1 записи были удалены|$1 записей были удалены}} из списка наблюдения:',
	'favoritelistedit-raw-title' => 'Редактировать список наблюдения как текст',
	'favoritelistedit-raw-legend' => 'Редактировать список наблюдения как текст',
	'favoritelistedit-raw-explain' => 'Ниже перечислены страницы, находящиеся в вашем списке наблюдения. Вы можете изменять этот список, добавляя и удаляя из него строки с названиями, по одному названию на строку.
После завершения правок нажмите кнопку "{{int:Favoritelistedit-raw-submit}}".
Вы также можете [[Special:Favoritelist/edit|использовать стандартный редактор]].',
	'favoritelistedit-raw-titles' => 'Записи:',
	'favoritelistedit-raw-submit' => 'Обновить список наблюдения',
	'favoritelistedit-raw-done' => 'Список наблюдения обновлен',
	'favoritelistedit-raw-added' => '{{PLURAL:$1|Была добавлена|Были добавлены|Было добавлено}} $1 {{PLURAL:$1|запись|записи|записей}}:',
	'favoritelistedit-raw-removed' => '{{PLURAL:$1|Была удалена|Были удалены|Было удалено}} $1 {{PLURAL:$1|запись|записи|записей}}:',
	'favoritelisttools-view' => 'Просмотр списка наблюдения',
	'favoritelisttools-edit' => 'Посмотреть и изменить список наблюдения',
	'favoritelisttools-raw' => 'Редактирование текста списка наблюдения',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'favoritethis' => 'මෙම පිටුව ප්‍රියතම කරන්න',
	'prefs-favoritelist' => 'ප්‍රියතමයන්',
	'prefs-advancedfavoritelist' => 'ප්‍රගත විකල්පයන්',
	'favoritelist' => 'මගේ ප්‍රියතමයන්',
	'myfavoritelist' => 'මගේ ප්‍රියතමයන්',
	'favoritelistfor' => "(සඳහා '''$1''')",
	'favoritenologin' => 'ප්‍රවිෂ්ට වී නොමැත',
	'addedfavorite' => 'ප්‍රියතමයට එක් කරන්න',
	'favorite' => 'ප්‍රියතමය',
	'favoritethispage' => 'මෙම පිටුව ප්‍රියතම කරන්න',
	'favoritelist-options' => 'ප්‍රියතම විකල්පයන්',
	'favoritelistall2' => 'සියල්ල',
	'favoritelistedit-normal-title' => 'ප්‍රියතමයන් සංස්කරණය කරන්න',
	'favoritelistedit-normal-submit' => 'ශීර්ෂයන් ඉවත් කරන්න',
	'favoritelistedit-raw-titles' => 'ශීර්ෂයන්:',
	'favoritelistedit-raw-submit' => 'ප්‍රියතමයන් යාවත්කාලීනය කරන්න',
	'favoritelisttools-view' => 'ප්‍රියතමයන් නරඹන්න',
);

/** Swedish (svenska)
 * @author Diupwijk
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'favorites-desc' => 'Skapar en favoritlista',
	'prefs-favoritelist' => 'Favoriter',
	'prefs-advancedfavoritelist' => 'Avancerade alternativ',
	'favoritelist' => 'Mina favoriter',
	'myfavoritelist' => 'Mina favoriter',
	'favoritelistfor' => "(för '''$1''')",
	'nofavoritelist' => 'Du har inga sidor i dina favoriter.',
	'favoritelistanontext' => 'Du måste $1 för att se eller redigera dina favoriter.',
	'favoritenologin' => 'Inte inloggad',
	'favoritenologintext' => 'Du måste vara [[Special:UserLogin|inloggad]] för att kunna ändra dina favoriter.',
	'addedfavorite' => 'Lades till i favoriter',
	'addedfavoritetext' => 'Sidan "[[:$1]]" har lagts till dina [[Special:Favoritelist|favoriter]].',
	'removedfavorite' => 'Togs bort från favoriter',
	'removedfavoritetext' => 'Sidan "[[:$1]]" har tagits bort från [[Special:Favoritelist|dina favoriter]].',
	'favorite' => 'Favorit',
	'tooltip-ca-favorite' => 'Lägg till denna sida till dina favoriter',
	'tooltip-ca-unfavorite' => 'Ta bort denna sida från dina favoriter',
	'tooltip-favorite' => 'Lägg till denna sida till dina favoriter',
	'favoritelistall2' => 'alla',
	'favoritelistedit-numitems' => 'Dina favoriter innehåller {{PLURAL:$1|1 sida|$1 sidor}}.',
	'favoritelistedit-noitems' => 'Dina favoriter innehåller inga sidor.',
	'favoritelistedit-normal-title' => 'Redigera favoriter',
	'favoritelistedit-normal-legend' => 'Ta bort sidor från favoriter',
	'favoritelistedit-normal-submit' => 'Ta bort sidor',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|1 sida|$1 sidor}} togs bort från dina favoriter:',
	'favoritelistedit-raw-titles' => 'Sidor:',
	'favoritelistedit-raw-submit' => 'Uppdatera favoriter',
	'favoritelistedit-raw-done' => 'Dina favoriter har uppdaterats.',
	'favoritelistedit-raw-added' => '{{PLURAL:$1|1 sida|$1 sidor}} lades till:',
	'favoritelistedit-raw-removed' => '{{PLURAL:$1|1 sida|$1 sidor}} togs bort:',
	'favoritelisttools-view' => 'Visa favoriter',
	'favoritelisttools-edit' => 'Visa och redigera favoriter',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'prefs-favoritelist' => 'விருப்பங்கள்',
	'prefs-advancedfavoritelist' => 'மேம்பட்ட தெரிவுகள்',
	'favoritelist' => 'எனது விருப்பங்கள்',
	'myfavoritelist' => 'எனது விருப்பங்கள்',
	'favoritenologin' => 'புகுபதிகை செய்யப்படவில்லை',
	'favoritelistedit-normal-submit' => 'தலைப்புகளை நீக்கு',
	'favoritelistedit-raw-titles' => 'தலைப்புகள்:',
	'favoritelistedit-raw-done' => 'உங்கள் விருப்பங்கள் இற்றைப்படுத்தப்பட்டன.',
	'favoritelisttools-view' => 'விருப்பங்களைப் பார்க்கவும்',
	'favoritelisttools-edit' => 'விருப்பங்களைப் பார்த்துத் தொகுக்கவும்',
	'favoritelisttools-raw' => 'மூல விருப்பங்களைத் தொகுக்கவும்',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'favoritelistall2' => 'అన్నీ',
	'favoritelistedit-raw-titles' => 'శీర్షికలు:',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'favorites-desc' => 'Lumilikha ng isang listahan ng mga paborito',
	'favoritethis' => 'Paborituhin ang pahinang ito',
	'prefs-favoritelist' => 'Mga paborito',
	'prefs-favoritelist-token' => 'Kahalip ng mga paborito:',
	'prefs-advancedfavoritelist' => 'Masulong na mga mapagpipilian',
	'favoritelist' => 'Mga paborito ko',
	'myfavoritelist' => 'Mga paborito ko',
	'favoritelistfor' => "(para sa '''$1''')",
	'nofavoritelist' => 'Wala kang mga bagay-bagay sa loob ng mga paborito mo.',
	'favoritelistanontext' => 'Paki $1 upang tumingin o magbago ng mga bagay na nasa loob ng mga paborito mo.',
	'favoritenologin' => 'Hindi nakalagda',
	'favoritenologintext' => 'Dapat na [[Special:UserLogin|nakalagda]] ka upang mabago ang mga paborito mo.',
	'addedfavorite' => 'Idinagdag sa mga paborito',
	'addedfavoritetext' => 'Ang pahinang "[[:$1]]" ay naidagdag na sa iyong [[Special:Favoritelist|mga paborito]].',
	'removedfavorite' => 'Tinanggal magmula sa mga paborito',
	'removedfavoritetext' => 'Ang pahinang "[[:$1]]" ay tinanggal na mula sa [[Special:Favoritelist|mga paborito mo]].',
	'favorite' => 'Paborito',
	'favoritethispage' => 'Paborituhin ang pahinang ito',
	'unfavorite' => 'Huwag gawing paborito',
	'unfavoritethispage' => 'Huminto sa pagpapaborito',
	'favoritelist-options' => 'Mga mapagpipilian ng mga paborito',
	'favoriteing' => 'Pinapaborito...',
	'unfavoriteing' => 'Hindi na pinapaborito...',
	'tooltip-pt-favoritelist' => 'Ang talaan ng mga pahinang minamatyagan mo para sa pagbabago',
	'tooltip-ca-favorite' => 'Idagdag ang pahinang ito sa mga paborito mo',
	'tooltip-ca-unfavorite' => 'Alisin ang pahinang ito mula sa mga paborito mo',
	'tooltip-favorite' => 'Idagdag ang pahinang ito sa mga paborito mo',
	'favoritelistall2' => 'lahat',
	'favoritelistedit-numitems' => 'Ang mga paborito mo ay naglalaman ng {{PLURAL:$1|1 pamagat|$1 mga pamagat}}.',
	'favoritelistedit-noitems' => 'Hindi naglalaman ng mga pamagat ang mga paborito mo.',
	'favoritelistedit-normal-title' => 'Baguhin ang mga paborito',
	'favoritelistedit-normal-legend' => 'Tanggalin ang mga pamagat mula sa mga paborito',
	'favoritelistedit-normal-explain' => 'Ipinapakita sa ibaba ang mga pamagat na nasa loob ng mga paborito mo.
Upang matanggal ang isang pamagat, lagyan ng tsek ang kahong katabi nito, at pindutin ang "{{int:Favoritelistedit-normal-submit}}".
Maaari mo ring [[Special:Favoritelist/raw|baguhin ang hilaw na listahan]].',
	'favoritelistedit-normal-submit' => 'Tanggalin ang mga pamagat',
	'favoritelistedit-normal-done' => 'Tinatanggal mula sa mga paborito mo ang {{PLURAL:$1|1 pamagat|$1 mga pamagat}}:',
	'favoritelistedit-raw-title' => 'Baguhin ang hilaw na listahan ng mga paborito',
	'favoritelistedit-raw-legend' => 'Baguhin ang hilaw na listahan ng mga paborito',
	'favoritelistedit-raw-explain' => 'Ipinapakita sa ibaba ang mga pamagat na nasa loob ng mga paborito mo, at maaaring baguhin sa pamamagitan ng pagdaragdag at pagtatanggal mula sa talaan;
isang pamagat sa bawat guhit.
Kapag natapos na, pindutin ang "{{int:Favoritelistedit-raw-submit}}".
Maaari mo ring [[Special:Favoritelist/edit|gamitin ang saligang pampatnugot]].',
	'favoritelistedit-raw-titles' => 'Mga pamagat:',
	'favoritelistedit-raw-submit' => 'Isapanahon ang mga paborito',
	'favoritelistedit-raw-done' => 'Naisapanahon na ang mga paborito mo.',
	'favoritelistedit-raw-added' => 'Naidagdag ang {{PLURAL:$1|1 pamagat|$1 mga pamagat}}:',
	'favoritelistedit-raw-removed' => 'Natanggal ang {{PLURAL:$1|1 pamagat|$1 mga pamagat}}:',
	'favoritelisttools-view' => 'Tingnan ang mga Paborito',
	'favoritelisttools-edit' => 'Tingnan at baguhin ang mga paborito',
	'favoritelisttools-raw' => 'Baguhin ang hilaw na mga paborito',
);

/** толышә зывон (толышә зывон)
 * @author Erdemaslancan
 */
$messages['tly'] = array(
	'favoritelist' => 'Чымы выжнијә',
	'myfavoritelist' => 'Чымы выжнијә',
	'favorite' => 'Выжнијә',
);

/** Turkish (Türkçe)
 * @author Bilalokms
 * @author Emperyan
 */
$messages['tr'] = array(
	'favorites-desc' => 'Bir sık kullanılanlar listesi oluşturma',
	'prefs-favoritelist' => 'Sık kullanılanlar',
	'prefs-advancedfavoritelist' => 'Gelişmiş seçenekler',
	'favoritelist' => 'Sık kullanılanlarım',
	'myfavoritelist' => 'Sık kullanılanlarım',
	'favoritelistfor' => "('''$1''' için)",
	'nofavoritelist' => 'Sık kullanılanlarınızda hiçbir madde bulunmuyor.',
	'favoritenologin' => 'Oturum açmadınız',
	'removedfavorite' => 'Sık kullanılanlardan kaldırıldı',
	'favoritelist-options' => 'Sık kullanılanlar seçenekleri',
	'tooltip-ca-favorite' => 'Bu sayfayı sık kullanılanlara ekle',
	'tooltip-ca-unfavorite' => 'Bu sayfayı sık kullanılanlardan çıkarın',
	'tooltip-favorite' => 'Bu sayfayı sık kullanılanlara ekle',
	'favoritelistall2' => 'hepsi',
	'favoritelistedit-normal-title' => 'Sık kullanılanları düzenle',
	'favoritelistedit-normal-legend' => 'Başlıkları sık kullanılanlardan kaldır',
	'favoritelistedit-normal-submit' => 'Başlıkları kaldır',
	'favoritelistedit-raw-title' => 'Ham sık kullanılanlar listesini düzenle',
	'favoritelistedit-raw-legend' => 'Ham sık kullanılanlar listesini düzenle',
	'favoritelistedit-raw-titles' => 'Başlıklar:',
	'favoritelistedit-raw-submit' => 'Sık kullanılanlara ekle',
	'favoritelistedit-raw-done' => 'Sık kullanılanlarınız güncellendi.',
	'favoritelisttools-view' => 'Sık Kullanılanları Görüntüle',
	'favoritelisttools-edit' => 'Sık kullanılanları gör ve düzenle',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'favoritelistall2' => 'سب',
	'favoritelistedit-normal-title' => 'پسندیدہ میں ترمیم کریں',
	'favoritelistedit-normal-submit' => 'عنوانات ہٹا',
	'favoritelistedit-raw-titles' => 'عنوانات:',
);

/** Vietnamese (Tiếng Việt)
 * @author පසිඳු කාවින්ද
 */
$messages['vi'] = array(
	'favoritelistall2' => 'tất cả',
);

/** Yiddish (ייִדיש)
 * @author පසිඳු කාවින්ද
 */
$messages['yi'] = array(
	'favoritelistall2' => 'אלע',
	'favoritelistedit-raw-titles' => 'טיטלען:',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Linforest
 */
$messages['zh-hans'] = array(
	'favorites-desc' => '创建收藏夹列表',
	'favoritethis' => '收藏此页',
	'prefs-favoritelist' => '收藏夹',
	'prefs-favoritelist-token' => '收藏夹标记：',
	'prefs-advancedfavoritelist' => '高级选项',
	'favoritelist' => '我的收藏夹',
	'myfavoritelist' => '我的收藏夹',
	'nofavoritelist' => '您的收藏夹还没有任何条目。',
	'favoritelistanontext' => '请 $1 查看或编辑您的收藏夹之中的条目。',
	'favoritenologin' => '没有登录',
	'favoritenologintext' => '您必须先[[Special:UserLogin|登录]]才能更改您的收藏夹。',
	'addedfavorite' => '添加到收藏夹',
	'addedfavoritetext' => '页面"[[:$1]]"已被添加到您的[[Special:Favoritelist|收藏夹]]。',
	'removedfavorite' => '已从收藏夹中删除',
	'removedfavoritetext' => '页面"[[:$1]]"已从[[Special:Favoritelist|您的收藏夹]]中删除。',
	'favorite' => '收藏',
	'favoritethispage' => '收藏此页',
	'unfavorite' => '不收藏',
	'unfavoritethispage' => '停止收藏',
	'favoritelist-options' => '收藏夹选项',
	'favoriteing' => '收藏……',
	'unfavoriteing' => '不收藏……',
	'tooltip-pt-favoritelist' => '你正监视更改的页面列表',
	'tooltip-ca-favorite' => '将此页添加到您的收藏夹',
	'tooltip-ca-unfavorite' => '从收藏夹中删除此页',
	'tooltip-favorite' => '将此页添加到您的收藏夹',
	'favoritelistall2' => '全部',
	'favoritelistedit-numitems' => '您的收藏夹包含 {{PLURAL:$1|1 title|$1 titles}}.',
	'favoritelistedit-noitems' => '您的收藏夹没有包含任何标题。',
	'favoritelistedit-normal-title' => '编辑收藏夹',
	'favoritelistedit-normal-legend' => '从收藏夹中删除标题',
	'favoritelistedit-normal-explain' => '如下所示为您的收藏夹当中的标题。
要删除标题，选中其旁边的复选框，然后单击"{{int:Favoritelistedit-normal-submit}}"。
您也可以[[Special:Favoritelist/raw|编辑原始列表]]。',
	'favoritelistedit-normal-submit' => '删除标题',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|1 title was|$1 titles were}} 已经从您的收藏夹中删除：',
	'favoritelistedit-raw-title' => '编辑原始收藏夹列表',
	'favoritelistedit-raw-legend' => '编辑原始收藏夹列表',
	'favoritelistedit-raw-explain' => '如下所示为您的收藏夹中的标题，并且可以通过在该列表中添加和删除来编辑这些标题。
每行一个标题。
完成后，请单击"{{int:Favoritelistedit-raw-submit}}"。
您也可以[[Special:Favoritelist/edit|使用标准编辑器]]。',
	'favoritelistedit-raw-titles' => '标题：',
	'favoritelistedit-raw-submit' => '更新收藏夹',
	'favoritelistedit-raw-done' => '已更新您的收藏夹。',
	'favoritelistedit-raw-added' => '{{PLURAL:$1|1 title was|$1 titles were}} 已添加：',
	'favoritelistedit-raw-removed' => '{{PLURAL:$1|1 title was|$1 titles were}} 已删除：',
	'favoritelisttools-view' => '查看收藏夹',
	'favoritelisttools-edit' => '查看和编辑收藏夹',
	'favoritelisttools-raw' => '编辑原始收藏夹',
);

/** Traditional Chinese (中文（繁體）‎) */
$messages['zh-hant'] = array(
	'favorites-desc' => '創建收藏夾列表',
	'favoritethis' => '收藏此頁',
	'prefs-favoritelist' => '收藏夾',
	'prefs-favoritelist-token' => '收藏夾標記：',
	'prefs-advancedfavoritelist' => '高級選項',
	'favoritelist' => '我的收藏夾',
	'myfavoritelist' => '我的收藏夾',
	'nofavoritelist' => '您的收藏夾還沒有任何條目。',
	'favoritelistanontext' => '請 $1 查看或編輯您的收藏夾之中的條目。',
	'favoritenologin' => '沒有登錄',
	'favoritenologintext' => '您必須先[[Special:UserLogin|登錄]]才能更改您的收藏夾。',
	'addedfavorite' => '添加到收藏夾',
	'addedfavoritetext' => '頁面"[[:$1]]"已被添加到您的[[Special:Favoritelist|收藏夾]]。',
	'removedfavorite' => '已從收藏夾中刪除',
	'removedfavoritetext' => '頁面"[[:$1]]"已從[[Special:Favoritelist|您的收藏夾]]中刪除。',
	'favorite' => '收藏',
	'favoritethispage' => '收藏此頁',
	'unfavorite' => '不收藏',
	'unfavoritethispage' => '停止收藏',
	'favoritelist-options' => '收藏夾選項',
	'favoriteing' => '收藏……',
	'unfavoriteing' => '不收藏……',
	'tooltip-pt-favoritelist' => '你正監視更改的頁面列表',
	'tooltip-ca-favorite' => '將此頁添加到您的收藏夾',
	'tooltip-ca-unfavorite' => '從收藏夾中刪除此頁',
	'tooltip-favorite' => '將此頁添加到您的收藏夾',
	'favoritelistall2' => '全部',
	'favoritelistedit-numitems' => '您的收藏夾包含 {{PLURAL:$1|1 title|$1 titles}}.',
	'favoritelistedit-noitems' => '您的收藏夾沒有包含任何標題。',
	'favoritelistedit-normal-title' => '編輯收藏夾',
	'favoritelistedit-normal-legend' => '從收藏夾中刪除標題',
	'favoritelistedit-normal-explain' => '如下所示為您的收藏夾當中的標題。
要刪除標題，選中其旁邊的複選框，然後單擊"{{int:Favoritelistedit-normal-submit}}"。
您也可以[[Special:Favoritelist/raw|編輯原始列表]]。',
	'favoritelistedit-normal-submit' => '刪除標題',
	'favoritelistedit-normal-done' => '{{PLURAL:$1|1 title was|$1 titles were}} 已經從您的收藏夾中刪除：',
	'favoritelistedit-raw-title' => '編輯原始收藏夾列表',
	'favoritelistedit-raw-legend' => '編輯原始收藏夾列表',
	'favoritelistedit-raw-explain' => '如下所示為您的收藏夾中的標題，並且可以通過在該列表中添加和刪除來編輯這些標題。
每行一個標題。
完成後，請單擊"{{int:Favoritelistedit-raw-submit}}"。
您也可以[[Special:Favoritelist/edit|使用標準編輯器]]。',
	'favoritelistedit-raw-titles' => '標題：',
	'favoritelistedit-raw-submit' => '更新收藏夾',
	'favoritelistedit-raw-done' => '已更新您的收藏夾。',
	'favoritelistedit-raw-added' => '{{PLURAL:$1|1 title was|$1 titles were}} 已添加：',
	'favoritelistedit-raw-removed' => '{{PLURAL:$1|1 title was|$1 titles were}} 已刪除：',
	'favoritelisttools-view' => '查看收藏夾',
	'favoritelisttools-edit' => '查看和編輯收藏夾',
	'favoritelisttools-raw' => '編輯原始收藏夾',
);

