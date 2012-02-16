<?php
$c = "#";
$b = chr(2);
/**
 * Please respect weird punctuations when doing human readable translations
 * Examples: .leading dot. missing dots,  leading spaces Etc. 
 */
$lang = array(
############
### Bits ###
############
# Tiny bits
'name' => 'Name',
'none' => 'None',
'over' => 'Over',
'items' => 'Items',
'mount' => 'Mount',
'bank_items' => 'Your bank items',
'unknown' => 'Unknown',
'unknown_contr' => 'Unknown Contactors',
'modifiers' => " {$b}Modifiers{$b}: %s.", # statlist
'm' => 'm', # metres
'g' => '%dg', # gram
'kg' => '%.02fkg', # kilogram
'busy' => '%s seconds busy.', # duration
'eta' => 'ETA: %s.', # duration
'hits1' => ', hits %s with %s damage', # player, damage
'hits2' => ', hits %s with %s(%s/%s)HP left', # player, damage, hp left, max hp
'kills' => ', kills %s with %s', # player, damage
'loot_nyxp' => '. You loot %s and %.02f XP',
'page' => 'page %d/%d: %s.',
'from_brewing' => 'brewing magic potions',
'members' => '%d members',

# Options
'opt_help' => 'Help',
'opt_lock' => 'Equipment Lock',
'opt_bot' => 'Player Botflag',
'opt_norl' => 'Permleader',
'enabled' => 'enabled',
'disabled' => 'disabled',

# PrintF-Formats
'fmt_list' => ', %s', # item
'fmt_gain' => '%s%.02f(%.02f/%.02f)%s', # sign, gain, now, max, unit
'fmt_asl' => "{$b}Age{$b}:%d, %dcm %s", # age, height, weight
'fmt_requires' => " {$b}Requires{$b}: %s.", # statted list
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
'empty_party' => 'an empty party',
'pa_delete' => "{$b}beeing deleted{$b}.",
'pa_talk' => "{$b}talking{$b} to %s. %s remaining. Last action: %s", # enemy party, duration, last action
'pa_fight' => "{$b}fighting{$b} against %s. Last action: %s", # enemy party last action.
'pa_inside' => "{$b}inside{$b} %s.", # location
'pa_outside1' => "{$b}outside{$b} of %s.", # location
'pa_outside2' => "somewhere inside %s.", # location
'pa_sleep' => "{$b}sleeping{$b} inside %s.", # location
'pa_travel' => "{$b}travelling{$b} to %s. %s remaining.", # location, duration
'pa_explore' => "{$b}exploring{$b} %s. %s remaining.", # location, duration
'pa_goto' => "{$b}going{$b} to %s. %s remaining.", # location, duration
'pa_hunt' => "{$b}hunting{$b} %s. %s remaining.", # location, duration
'pa_hijack' => "{$b}hijacking{$b} %s at %s. %s remaining.", # playername, location, duration

# Quest states
'qu_open' => 'Open',
'qu_deny' => 'Denied',
'qu_done' => 'Done',
'qu_fail' => 'Failed',
'qu_abort' => 'Aborted',
'qu_All' => 'All',
'qu_Browse' => 'Browse',

# Sums
'sum_age' => 'ages',
'sum_bmi' => 'body masses',
'sum_height' => 'heights',

# Stubs
'stub_found' => 'You found the %s. There is no description yet.', # location
'stub_enter' => 'You enter the %s. There is no text yet.', # location
'stub_shop_slogan' => 'Welcome to %s\'s shop.', # player
'stub_found_bazar' => 'You found the local bazar, a place where you can offer your items and purchase them.',
'stub_enter_bazar' => 'You enter the bazar. You see %d shops with a total of %d items.', # shopcount, itemcount
'stub_found_clanhq' => 'You found the clan headquarters.',
'stub_enter_clanhq' => 'You enter the clan headquarters.',
'stub_found_elevator' => 'You enter the %s. A sign reads: "MAX %s KG".',
'stub_enter_elevator' => 'You enter the %s. A sign reads: "MAX %s KG".',
'stub_found_bank' => 'You found the Bank of %s. All transactions are done with slot machines.',
'stub_enter_bank' => 'You enter the Bank of %s. You see some customers at the counters and also some security officers.',
'stub_found_blacksmith' => 'You find a small store, "The Blacksmith". It seems like they can upgrade your equipment here.',
'stub_enter_blacksmith' => 'You enter the %s blacksmith. You see two dwarfs at the counter.',

# Clan history
'ch_0' => '%s created the clan %s.', # player, clanname
'ch_1' => '%s requested to join your clan as member #%s.', # player, membernum
'ch_2' => '%s has joined your clan as member #%s.', # player, membernum
'ch_3' => '%s has left your clan and it now holds %s members.', # player, amt
'ch_4' => "{$b}%s{$b}: \"%s\"", # player, message
'ch_5' => '%s has pushed %s into the clanbank.', # player, nuyen
'ch_6' => '%s has taken %s out of the clanbank.', # player, nuyen
'ch_7' => '%s has put %s %s into the clanbank.', # player, amt, item 
'ch_8' => '%s has taken %s %s out of the clanbank.', # player, amt, item
'ch_9' => '%s has purchased more member slots and the clan can now hold up to %s.', # player, memberslots
'ch_10' => '%s has purchased more nuyen capacity and the clan can now hold up to %s.', # player, maxnuyen
'ch_11' => '%s has purchased more storage room and the clan can now hold up to %s.', # player, maxstorage

# Bounty
'meet_bounty' => " There is a {$b}bounty{$b} on %s.", # sumlist
'no_bounty' => 'This player has no bounty.',
'total_bounty' => "There is a total {$b}bounty of %s{$b} for %s: %s.", # total, player, details
'no_bounties' => 'There are no bounties at the moment.',
'bounty_page' => 'Bounties page %s/%s: %s.',

# Bad karma
'info_bk' => ', %s has %d bad_karma', # player, badkarma

# Ingame help
'hlp_in_outside' => 'When you find locations, you are outside of them. Use #goto or #enter to enter them. You can #(exp)lore again to find more locations.',
'hlp_clan_enter' => "Join clans with {$c}abandon, {$c}request and {$c}accept. Create a clan with {$c}create. Purchase more size and motto with {$c}manage. Set options with {$c}toggle. Access clan bank with {$c}push, {$c}pop and {$c}view, clan money with {$c}pushy and {$c}popy.",
'hlp_bank' => "In a bank you can use {$c}pushi and {$c}popi to bank items, and {$c}pushy and {$c}popy to store nuyen. Use {$c}viewi to list or search your banked items. Every transaction costs %s for you.",
'hlp_bazar' => "In the bazar you can sell your items. You can use #push, #pop, #view, #search, #buy, #bestbuy, #buyslot, #slogan and #price here.",
'hlp_elevator' => 'In elevators you can use #up, #down and #floor.',
'hlp_exit' => 'You can return to this location to #leave the building.',
'hlp_hotel' => 'You can pay %s to #sleep here and restore your party`s HP/MP.',
'hlp_hack' => ' You can use a Cyberdeck here to hack into a computer.',
'hlp_search' => ' You can use #search here to search the room for items.',
'hlp_second_hand' => 'You can sell statted items to higher prices here. The statted items that get sold here will stay in the shop.',
'hlp_store' => 'In this store you can use %s.',
'hlp_cyberdeck' => 'This item only works inside locations with computers.',
'hlp_cyberdeck_targets' => 'You don\'t see any Computers with a Headcomputer interface here.',
'hlp_start' => "{$b}Known races{$b}: %s. {$b}Known genders{$b}: %s.",
'hlp_blacksmith' => "At a blacksmith you can {$c}upgrade equipment with runes. You can also {$c}break items into runes or {$c}clean them. It is also possible to {$c}split runes. Also {$c}view, {$c}buy and {$c}sell works here.",

# Start storyline
'start_1' => "You wake up in a bright room... It seems like it is past noon...looks like you are in a hotel room.",
'start_2' => "What happened... You can`t remember anything.... Gosh, you even forgot your name.",
'start_3' => "You check your {$b}{$c}inventory{$b} and find a pen from 'Renraku Inc.'. You leave your room and walk to the counter. Use {$b}{$c}talk{$b} to talk with the hotelier.",
'start_4' => "Use {$b}{$c}c{$b} to see all available commands. Check {$b}{$c}help{$b} to browse the Shadowlamb help files. Use {$c}help <cmd> to see the help for a command.",

# Knowledge
'ks_words' => 'Word',
'ks_spells' => 'Spell',
'ks_places' => 'Place',
'kp_words' => 'Words',
'kp_spells' => 'Spells',
'kp_places' => 'Places',

# Party loot
'pl_unknown' => 'Unknown',
'pl_cycle' => 'Cycle',
'pl_random' => 'Random',
'pl_killer' => 'Killer',

# Clan toggles
'ct_moderation' => 'Moderation',

##########################
#   0000-4999   = Errors #
##########################
'0000' => 'You did not #start the game yet. Type #start race gender to begin playing.',
'0001' => 'You need to login to play.',
		
'1002' => 'You need at least level %d to shout.', # level
'1003' => 'Please wait %s before you shout again.', # duration
'1004' => 'You have no %s quests.', # section
// '1005' => 'You don\'t know any word.',
'1006' => 'You do not meet the requirements: %s.', # statted-list
'1007' => 'No items found that match the search pattern.',
'1008' => 'There are no items here.',
'1009' => 'No such page!',
'1010' => 'There are no quests here.',
'1011' => 'You did not setup your asl with {$b}#aslset{$b} yet. You need to do this to start moving in the game.',
'1012' => 'The target is unknown.',
'1013' => 'You cannot use this item.',
'1014' => 'You cannot equip this item.',
'1015' => 'Your party (level sum %d) cannot attack a party with level sum %d because the level difference is larger than %d.',
'1016' => 'You already have your asl set to: %s.', # aslstring
'1017' => 'This player is unknown or not in memory.',
'1018' => 'This playername is ambigous. Try the {server} version.',
'1019' => 'You are not in a clan, chummer.',
'1020' => 'I don\'t know what item "%s" is.', # itemname
'1021' => 'You don`t have anything comparable to "%s" equipped.', # itemname
'1022' => 'You are not in a store.',
'1023' => 'You don\'t have this knowledge.',
'1024' => 'You can only levelup attributes, skills, knowledge and spells. Also you cannot levelup your essence.',
'1025' => 'You need to learn %s first.', # field
'1026' => 'You already have reached the max level of %d for %s.',
'1027' => 'You need %d karma to increase your base level for %s from %d to %d, but you only have %d karma.',
'1028' => '%s is not here or the name is ambigous.',
'1029' => 'You don\'t have that item.',
'1030' => 'You can\'t swap the same things.',
'1031' => 'You are not outside of a location.',
'1032' => 'You are not the party leader.',
'1033' => 'Your party is moving. Try this command when idle.',
'1034' => 'You cannot switch to running mode when you passed level 2.',
'1035' => 'In dungeons you don\'t have mounts.',
'1036' => 'This command does not work in combat.',
'1037' => 'You cannot store items in that mount.',
'1038' => 'Please specify a positive amount of items.',
'1039' => 'You cannot put mounts in your %s.', # mount name
'1040' => 'You do not have that much %s.', # itemname
'1041' => 'Your %s(%s/%s) has no room for %d of your %s (%s).', # mountname, stored, storage, amt, itemname, weight
'1042' => 'You don`t have that item in your mount.',
'1043' => 'You don\'t have that much %s in your %s.', # itemname, mountname
'1044' => 'Please wait %s before you shout again.',  # duration
'1045' => 'Multiple players whispered you, so I quit with this message.',
'1046' => 'Nobody whispered you in the last %s.', # duration
'1047' => 'You need to learn alchemy first.',
'1048' => 'You don\'t have this spell.',
'1049' => 'You don\'t have the %s spell on that high level.', # spellname
'1050' => 'You don\'t have a %s.',
'1051' => 'Brewing the potion failed and the bottle and mandrake is lost.',
'1052' => 'The "%s" spell works in combat only.', # spellname
'1053' => 'You cannot cast a spell with a level smaller than 0.',
'1054' => 'You cannot cast %s level %s because your spell level is only %s.', # spellname, levelneed, levelhave 
'1055' => 'You need %s MP to cast %s level %s, but you only have %s.', # needmp, spellname, level, #havemp
'1056' => 'You failed to cast %s. %s MP wasted.%s',
'1057' => 'The %s from %s failed.', # spellname, player
'1058' => 'You should not drop that item.',
'1059' => 'You cannot change your equipment in combat when it\'s locked.',
'1060' => 'You cannot attack this party again. Please wait %s.', # duration
'1061' => 'Funny. You give something to yourself. Problem?',
'1062' => 'Please specify a positive amount of nuyen.',
'1063' => 'This would cost %s but you only have %s.', # nuyen
'1064' => 'This player is not in your party.',
'1065' => 'You can only remote control NPC',
'1066' => 'Only the following remote commands are allowed: %s.', # rawlist
'1067' => 'You don`t have a %s equipped.', # type
'1068' => 'You are already exploring %s. ETA: %s.',
'1069' => 'This location is unknown or ambigious.',
'1070' => 'This location does not exist in %s.',
'1071' => 'You are already in %s.',
'1072' => 'Please specify a target to teleport to.',
'1073' => 'This city is unknown.',
'1074' => 'You cannot cast teleport inside this lcoation.',
'1075' => 'You cannot teleport to %s because %s do(es) not have the min level of %s.',
'1076' => 'You need at least %s level %s to teleport %s party members.',
'1077' => 'You need %s MP to brew this potion, but you got only %s.',
'1078' => 'You cannot cast this spell inside a dungeon.',
'1079' => 'You cannot teleport into dungeons.',
'1080' => 'You cannot move because %s is dead.',
'1081' => 'You cannot move because %s is overloaded.',
'1082' => 'You cannot move because %s has no #aslset.',
'1083' => 'You cannot hunt own party members.',
'1084' => 'You cannot hunt %s because you are in %s and %s is in %s.',
'1085' => 'You cannot join NPC parties.',
'1086' => 'You cannot join your own party.',
'1087' => 'The party does not want you to join.',
'1088' => 'The party has reached the maximum membercount of %d.',
'1089' => 'This player is not in your party.',
'1090' => 'You cannot kick yourself.',
'1091' => '%s is already the party leader.',
'1092' => 'You cannot give leadership to NPCs.',
'1093' => 'You are not in a party.',
'1094' => 'You should not use this command to swap leader position. Please use the #(le)ader command.',
'1095' => 'You are already leader of your party.',
'1096' => 'Your leader does not allow to takeover the leadership.',
'1097' => 'Please wait %s and try again.',
'1098' => 'There is currently no enemy available.',
'1099' => 'You cannot do this when you are in a party.',
'1100' => 'You cannot afford to use the bank. This cost %s and you only have %s to spare.',
'1101' => 'You don`t have that item in your bank.',
'1102' => 'You do not have that much %s in your bank.', # itemname
'1103' => 'You cannot push %s because you only carry %s.', # nuyen, nuyen
'1104' => 'You cannot pop %s, because you only have %s in your bank account.', # nuyen, nuyen
'1105' => 'There are no shops here.',
'1106' => '%s does not have a shop.', # player
'1107' => '%s\'s shop is empty.', # player
'1108' => 'This shop does not offer this item.',
'1109' => 'The minimum price for an item is %s.',
'1110' => 'Your price exceeds the max price.',
'1111' => 'All your bazar slots are in use. Try #pop or #buyslot.',
'1112' => 'You don`t have that item in your bazaar.',
'1113' => 'You do not have that much %s in your bazaar.',
'1114' => 'The fee for popping %d items out of your bazar is %s, but you only have %s.',
'1115' => 'You cannot buy items from your own shop.',
'1116' => 'You tried to purchase %d %s, but the shop only offers %d.',
'1117' => 'Your input exceeds the max length of %d characters.',
'1118' => 'You cannot enter this location.',
'1119' => 'You cannot destroy a clan when it\'s not empty and cleaned.',
'1120' => 'You are already in the "%s" clan.',
'1121' => 'This clan or player is unknown.',
'1122' => 'This clan has reached it\'s member limit of %d.',
'1123' => 'You were already applying for a clan, your old request has been deleted.',
'1124' => 'You do not have the right permissions.',
'1125' => '%s did not request to join your clan.',
'1126' => 'Your clan has reached it\'s limit of %s members. You can purchase more slots via the #manage function.',
'1127' => 'You do not have the minimum level of %s to create a clan.',
'1128' => 'The name of your clan is too long or too short.',
'1129' => 'A clan with this name already exists.',
'1130' => 'Your slogan exceeds the maxlength of %d characters.',
'1131' => 'You want to pop %s(+%s)=%s out of the clan bank, but it currently holds only %s.',
'1132' => 'You try to push another %s into the clan bank, but it already holds %s/%s.',
'1133' => 'You don\'t have that item in your clanbank.',
'1134' => 'You don\'t have that much %s in your clanbank.',
'1135' => 'Somehow the elevator is blocking this floor for you.',
'1136' => 'You push the button but you are on the very same floor already.',
'1137' => 'You don`t need to rest.',
'1138' => 'The doctor says: "You don`t need my help, chummer.',
'1139' => 'The doctor shakes his head: "No, my friend. Healing you will cost %s but you only have %s."',
'1140' => 'There is no such item here.',
'1141' => 'You already have %s implanted.',
'1142' => 'You can not implant %s. It conflicts with %s.',
'1143' => 'You don`t have enough essence(%s) to implant %s, which needs %s essence.',
'1144' => 'The doctor shakes his head: "My friend, removing this from your body will cost %s, but you only have %s."',
'1145' => 'Your character cannot learn %s.',
'1146' => 'You have already learned %s.',
'1147' => 'You need %s to learn this spell.',
'1148' => 'You cannot search again.',
'1149' => 'Your party members tried to crack the lock, but failed.',
'1150' => 'Purchasing items by ID is disabled here, because of possible race conditions.',
'1151' => 'I don`t want your %s.',
'1152' => 'There are no trains planned for today.',
'1153' => 'This target is unknown. Check available targets with #travel.',
'1154' => 'You can not afford %d tickets for %s.',
'1155' => 'This equipment has no special usage. You can equip it with #equip.',
'1156' => 'Your weapon is already loaded.',
'1157' => 'This item works only in combat.',
'1158' => 'You can only craft equipment.',
'1159' => 'You can only break statted items.',
'1160' => 'The second item is not a rune.',
'1161' => 'The rune has mixed mount and equipment modifiers. You have to split it first.',
'1162' => 'This rune can only be applied to mounts.',
'1163' => 'This rune can only be applied to equipment.',
'1164' => 'Please "#mount clean" before you change it.',
'1165' => 'The item string would get too long with another modifier.',
'1166' => 'You can only split runes.',
'1167' => 'This rune has only one modifier.',
'1168' => 'The rune completely broke while splitting it. You don\'t need to pay.',
'1169' => 'You can not reload a melee weapon? Oo',
'1170' => 'Your party is not moving.',
'1171' => 'Your character has been created already. You can type #reset to start over.',
'1172' => 'Your race is unknown or an NPC only race. Valid races: %s.',
'1173' => 'Your gender is unknown. Valid genders: %s.',
'1174' => "The command is not available for your current action or location. Try {$c}c [<l|long>] to see all currently available commands.",
'1175' => 'That\'s more than I offer, chummer.',

########################
# 10000-14999 = Spells #
########################
# Generic
'10000' => '%s uses a level %s %s potion on %s.',
'10001' => '%s casts a level %s %s on %s.',
'10002' => '%s uses a level %s %s potion on %s.',
'10003' => '%s casts a level %s %s on %s.',
# Berzerk
'10010' => '%s uses a level %s %s potion on %s, +%s min_dmg / +%s max_dmg for %s.',
'10011' => '%s casts a level %s %s on %s, +%s min_dmg / +%s max_dmg for %s.',
'10012' => '%s uses a level %s %s potion on %s.',
'10013' => '%s casts a level %s %s on %s.',
# Blow
'10020' => '%s uses a level %s %s potion on %s who got blown away %s and is now on position %s.',
'10021' => '%s casts a level %s %s on %s who got blown away %s and is now on position %s.',
'10022' => '%s uses a level %s %s potion on %s who got blown away %s and is now on position %s.',
'10023' => '%s casts a level %s %s on %s who got blown away %s and is now on position %s.',
# Chameleon
'10030' => '%s uses a level %s %s potion on %s, +%s charisma for %s.',
'10031' => '%s casts a level %s %s on %s, +%s charisma for %s.',
'10032' => '%s uses a level %s %s potion on %s.',
'10033' => '%s casts a level %s %s on %s.',
# Firebolt
'10040' => '%s uses a level %s %s potion on %s and caused %s damage.',
'10041' => '%s casts a level %s %s on %s and caused %s damage.',
'10042' => '%s uses a level %s %s potion on %s and caused %s damage, %s/%s HP left.',
'10043' => '%s casts a level %s %s on %s and caused %s damage, %s/%s HP left.',
# Freeze
'10050' => '%s uses a level %s %s potion on %s. %s seconds frozen with power %01f.',
'10051' => '%s casts a level %s %s on %s. %s seconds frozen with power %01f.',
'10052' => '%s uses a level %s %s potion on %s. %s seconds frozen with power %01f.',
'10053' => '%s casts a level %s %s on %s. %s seconds frozen with power %01f.',
# Goliath
'10060' => '%s uses a level %s %s potion on %s, +%s strength for %s.',
'10061' => '%s casts a level %s %s on %s, +%s strength for %s.',
'10062' => '%s uses a level %s %s potion on %s.',
'10063' => '%s casts a level %s %s on %s.',
# Hawkeye
'10070' => '%s uses a level %s %s potion on %s, +%s firearms for %s.',
'10071' => '%s casts a level %s %s on %s, +%s firearms for %s.',
'10072' => '%s uses a level %s %s potion on %s.',
'10073' => '%s casts a level %s %s on %s.',
# Hummingbird
'10080' => '%s uses a level %s %s potion on %s, +%s quickness for %s.',
'10081' => '%s casts a level %s %s on %s, +%s quickness for %s.',
'10082' => '%s uses a level %s %s potion on %s.',
'10083' => '%s casts a level %s %s on %s.',
# Magicarp
'10090' => '%s uses a level %s %s potion on %s and they lost %s MP.',
'10091' => '%s casts a level %s %s on %s, +%s and they lost %s MP.',
'10092' => '%s uses a level %s %s potion on %s and they lost %s MP.',
'10093' => '%s casts a level %s %s on %s and they lost %s MP.',
# Turtle
'10100' => '%s uses a level %s %s potion on %s, +%s marm/farm for %s.',
'10101' => '%s casts a level %s %s on %s, +%s marm/farm for %s.',
'10102' => '%s uses a level %s %s potion on %s.',
'10103' => '%s casts a level %s %s on %s.',
# Heal
'10110' => '%s uses a level %s %s potion on %s, %s.',
'10111' => '%s casts a level %s %s on %s, %s.',
'10112' => '%s uses a level %s %s potion on %s.',
'10113' => '%s casts a level %s %s on %s.',

############################
#   5000-9999   = Messages #
############################
'5000' => '%s just quit his irc server.', # username 
'5001' => 'You awake and have a delicious breakfast.',
'5002' => 'You are ready to go.',
'5003' => 'The party advanced to level %s.', # level
'5004' => 'Your attributes: %s.', # statlist
'5005' => 'Inventory',
'5006' => 'Your skills: %s.', # statlist
'5007' => 'Known Places in %s: %s.', # cityname, places
'5008' => 'Your party has %s: %s.', # nuyen sum, party sum list
'5009' => 'Quest stats per city: %s.', # questlist
'5010' => 'Quest stats: %d open, %d accomplished, %d rejected, %d failed, %d unknown from a total of %d.',
'5011' => '%d: %s - %s (%s)', # questid, questname, describtion, status
'5012' => 'Your asl: %s. Use #asl [<age|bmi|height>] for party sums.',
'5013' => 'Your party\'s %s(%s): %s.', # field, total, sumlist
# Gender Race L(LL), HP/HPP MP/MPP, ATK, DEF, DMG-DDMG, MARM/FARM, XP, Karma, NY, WEIGHT/WWEIGHT
# Status with magic
'5014' => "%s %s L%s(%s). {$b}HP{$b}:%s/%s, {$b}MP{$b}:%s/%s, {$b}Atk{$b}:%s, {$b}Def{$b}:%s, {$b}Dmg{$b}:%s-%s, {$b}Arm{$b}(M/F):%s/%s, {$b}XP{$b}:%.02f, {$b}Karma{$b}:%s, {$b}¥{$b}:%.02f, {$b}Weight{$b}:%s/%s.",
# Status without magic
'5015' => "%s %s L%s(%s). {$b}HP{$b}:%s/%s, {$b}Atk{$b}:%s, {$b}Def{$b}:%s, {$b}Dmg{$b}:%s-%s, {$b}Arm{$b}(M/F):%s/%s, {$b}XP{$b}:%.02f, {$b}Karma{$b}:%s, {$b}¥{$b}:%.02f, {$b}Weight{$b}:%s/%s.",
# Party status
'5016' => 'You are %s', # action
'5017' => 'You are leading %d members (%s) and you are %s', # membercount, memberlist, action
'5018' => 'Your party (%s) is %s', # memberlist, action
'5019' => 'Old message: %s', # message
'5020' => 'You exit the %s.', # location
'5021' => 'You hear the alarm sound!',
'5022' => 'Your hacking attempt failed.',
'5023' => 'Your join request has been sent to the clan leaders.',
'5024' => 'Your target for hijacking (%s) gone away.', # target
'5025' => '%s has left %s.', # target, location
'5026' => '%s is in your party now.', # target
'5027' => 'You explored %s again, but it seems you know every single corner of it.', # cityname
'5028' => 'You explored %s again, but could not find anything new.', # cityname
'5029' => '%s', # location found text
'5030' => '%s', # inngame help message
'5031' => 'You have lost your target and continue in the streets of %s.', # cityname
'5032' => 'You found %s at %s with a party of %s members.', # target, location, membercount
'5033' => 'You found %s in the streets of %s.', # target, cityname
'5034' => "You collected a {$b}bounty{$b}: %s.", # nuyen
'5035' => '%s have been booked to your bank account for selling %s %s to %s.', # nuyen, amt, item, player
'5036' => 'Your character has been punished with %.02f bad_karma.', # bad karma
'5037' => 'Hidden commands: %s.', # cmdlist
'5038' => 'Player %s does not belong to a clan yet.', # player
'5039' => '%s is in the "%s" clan with %s/%s members, %s/%s wealth and %s/%s in the bank. Their motto: %s',
'5040' => '%d ClanMembers page %d/%d: %s.', # membercount, page, npages, sumlist
'5041' => 'ClanHistory page %d/%d: %s.', # page, npages, weird msglist
'5042' => 'Cmds: %s.',
'5043' => '%s', # Compare table messages, 3 rows
'5044' => '%s', # Unknown table messages, multiple rows
'5045' => 'Your cyberware: %s.', # itemlist
'5046' => 'You surely forgot about the %s "%s".', # section, knowledge
'5047' => 'Your effects: %s.', # effectlist
'5048' => 'Your equipment: %s.', # equipstring
'5049' => '%s', # examine string
'5050' => 'Your parties HP: %s.', # HP/MP string
'5051' => 'Your parties MP: %s.', # HP/MP string
'5052' => 'Your party has %s karma: %s.', # total, sumlist
'5053' => 'Your knowledge: %s.', # statlist
'5054' => 'Known spells: %s.', # spellfmtlist
'5055' => 'Known Words: %s.', # #rawitemlist
'5056' => 'Your party has level %s(%s/%s): %s.', # total level, xp , need xp, sumlist
'5057' => 'Skills to upgrade: %s.', # lvlupstring
'5058' => 'Attributes to upgrade: %s.', # lvlupstring
'5059' => 'Knowledge to upgrade: %s.', # lvlupstring
'5060' => 'Spells to upgrade: %s.', # lvlupstring
'5061' => 'You used %d karma and leveled up your %s from %d to %d.', # karma, field, from, to
'5062' => "{$b}%s{$b} shows you: %s.", # player, examinestring
'5063' => 'Items %s and %s have been swapped.', # itemname, itemname
'5064' => 'Your party carries %s: %s.', # total weight, sumlist
'5065' => 'Your party does not accept new members anymore.',
'5066' => 'Your party does accept new members again.',
'5067' => '%s has been banned from the party.',
'5068' => '%s may now join your party again.',
'5069' => '%s quests, page %d/%d: %s.',
'5070' => '%s has been already %s.', # option, en/disabled
'5071' => '%s has been %s for your character.', # option, en/disabled
'5072' => 'Your Shadowlamb message type was already set to %s.', # notice|privmsg
'5073' => 'Your Shadowlamb message type has been set to %s.', # notice|privmsg
'5074' => 'This is a test.',
'5075' => 'You are already playing running mode. Nice!',
'5076' => 'Type "%s" to confirm.',
'5077' => 'You are now playing running mode. This means unlimited stats but instant death. Good luck!',
'5078' => 'It is advised you #enable norl now too, to prevent your char from beeing kidnapped with the #rl command!',
'5079' => 'Your mount page %s/%s: %s.', # page, pages, itemlist
'5080' => 'You stored %d of your %s in your %s.', # amt, itemname, mountname
'5081' => 'You collect %d %s from your %s and put it into your inventory (ID: %d).', # amt, itemname, mountname, invid
'5082' => 'You have cleaned your mount.',
'5083' => 'Party Mounts(%s/%s): %s.', # storage, max storage, sumlist
'5084' => "{$b}%s{$b} pm: \"%s\"", # player, message
'5085' => "{$b}%s{$b} says: \"%s\"", # player, message
'5086' => "{$b}%s{$b} whispers: \"%s\"", # player, message
'5087' => '%s', # bounties
'5088' => '%s', # own bounty
'5089' => '%s', # other bounty
'5090' => '%s moves %.01f meters %s and is now on position %.01f meters%s', # player, fw/bw, metres, busy (OWN)
'5091' => '%s moves %.01f meters %s and is now on position %.01f meters%s', # player, fw/bw, metres, busy (ENEMY)
'5092' => 'The enemy party said "bye".',
'5093' => 'You continue %s', # action
'5094' => '%s thanked you and left the party.', # player
'5095' => 'You encounter %s.',
'5096' => 'You meet %s.%s%s',
'5097' => '%s moves %.01f meters towards %s and is now on position %.01f meters. %ds busy.',
'5098' => '%s moves %.01f meters towards %s and is now on position %.01f meters.',
'5105' => 'You loot %s and %s XP.', # nuyen, XP
'5110' => 'You are about to drop %d %s. Retype to confirm.', # amt itemname
'5111' => 'You got rid of %d %s.',
'5112' => '%s tried to flee from the combat. %s busy.', #player, duration
'5113' => '%s has fled from the enemy.', # player
'5114' => '%s has fled from combat.', # player
'5115' => 'You gave %d %s to %s.%s', # amt, item, player, busytime
'5116' => '%s received %s from %s.', # player, itemlist, source
'5117' => '%s told %s about %s.', # player, player, knowledge
'5118' => 'You received %s from %s.', # itemname, player
'5119' => 'You gave %s to %s.', # itemname, player
'5120' => 'You see no other players.',

'5121' => 'Widoczni gracze: %s.',
'5122' => 'Twój domyślny dystans walki został zmieniony na %.01f metrów.',
'5123' => 'Dystans: %s.', # sumlist
'5124' => 'Dystans: %s.', # sumlist
'5125' => 'Zostałeś/aś nagrodzony %s za zabicie przeciwnika.',
'5126' => 'Zacząłeś/aś eksplorację %s. ETA: %s.',
'5127' => 'Zmierzasz do %s. ETA: %s.',
'5128' => 'Nie widzisz żadnych dodatków u innych graczy, które można ukraść.',
'5129' => '%s', # Mount page
'5130' => 'Mounts hijack : %s.',
'5133' => '%s użył %s MP to cast %s i Twoja grupa jest na zewnątrz %s.',
'5134' => 'Zacząłeś/aś polowanie %s. ETA: %s.',
'5135' => '%s opuścił grupę.',
'5136' => '%s dołączył do grupy.',
'5137' => '%s został wyrzucony z grupy.',
'5138' => '%s jest nowym liderem grupy.',
'5139' => "Tryb łupu dla Twojej grupy został zmieniony na: {$b}%s{$b}.",

'5140' => '%s and %s have swapped their party position.', # player, player
'5141' => 'You are guided into the arena and see your enemy: %s.', # snippet
'5142' => '%s', # generic bank viewi.
'5143' => 'You pay %s nuyen.', # nuyen
'5144' => 'You put %d of your %s into your bank account. You now carry %s/%s.', # amount, item, weight, maxweight
'5145' => 'You remove %d %s from your bank account and put it into your inventory. You now carry %s/%s.', # amount, item, weight, maxweight
'5146' => 'You carry %s. In your bank are %s. Every transaction costs %s.', # nuyen, nuyen. cost
'5147' => 'You push %s into your bank account (now %s) and keep %s in your inventory.', # nuyen, nuyen, nuyen
'5148' => 'You pop %s from your bank account (%s left) and now carry %s.', # nuyen, nuyen, nuyen
'5149' => 'Shops, page %d/%d: %s.',
'5150' => '%s\'s shop: "%s"', # player, bazar slogan
'5151' => '%d items: %s.', # # itemcount, bazaritemlist
'5152' => "%s sells one of %d %s for {$b}%s{$b}. Type {$b}#buy %1\$s %3\$s{$b} to purchase.", # player, itemcount, itemname, nuyen, examinestring
'5153' => 'You now offer %d %s for %s each in your bazar.', # amount, itemname, price
'5154' => 'You pay the fee of %s and remove %d %s from your bazar and put it into your inventory.', # price, amount, itemname
'5155' => 'You attempt to purchase %d %s from %s for %s. Retype to confirm.', # amount, itemname, player, price
'5156' => '%s purchased %d %s from %s\'s bazar.', # player, amount, itemname, player
'5157' => 'You currently have %d of %d bazar slots in use. Another slot would cost you %s. Type "#buyslot yesplease" to confirm.',
'5158' => 'You pay the fee of %s and now have %s bazar slots.', # nuyen, slotcount
'5159' => 'Your slogan has been set to: "%s".', # slogan
'5160' => 'Bazaar matches, page %d/%d: %s.', # page, npages, bazaar searchlist
'5161' => 'You want to purchase %d %s, but you can only find %d.', # amount, itemname, amount
'5162' => 'You want to pay %s for %d %s, but the best price is %s.', # price, amount, itemname, price
'5163' => 'You are about to buy %d %s for %s in total. Retype your command to confirm.', # amount, itemname, price
'5164' => 'You purchased %d %s for a total price of %s.',
'5165' => 'You have left the "%s" clan.',
'5166' => '%s has accepted your join request for the %s clan.',
'5167' => 'Clan join requests page %d/%d: %s.',
'5168' => 'Congratulations. You formed a new clan named "%s".',
'5169' => 'You paid the fee of %s and set a new slogan for your clan.',
'5170' => 'Your clan currently can bank %s. Another %s would cost you %s. Please type "%s" to confirm.',
'5171' => 'Your clan has already reached the maximum of %s/%s.',
'5172' => 'You paid %s and your clan can now hold %s/%s.',
'5173' => 'You pay the fee of %s and push %s to the clan bank, which now holds %s/%s.',
'5174' => 'You pay the fee of %s and pop %s out of the clan bank, which now holds %s/%s.',
'5175' => 'Your clan\'s %s option has been %s.',
'5176' => 'ClanBank, page %d/%d: %s.',
'5177' => 'Your party pushes the "%s" button and the elevator starts to move.',
'5178' => 'You are on %s floor %s. Accessible floors: %s.',
'5179' => 'The doctor takes your %s and heals you.',
'5180' => 'You paid %s and got %s implanted.',
'5181' => 'You pay %s and got your %s removed.',
'5182' => "The party goes to sleep. You go to your {$b}own{$b} bedroom.",
'5183' => 'Available Courses: %s.',
'5184' => 'You pay %s and learned %s.',
'5185' => 'You search the %s...',
'5186' => 'You search the %s but find nothing.',
'5187' => '%s cracked the lock!',
'5188' => '%s', # Store item list fmt_sumlist
'5189' => '%s', # Store item examine string
'5190' => 'You paid %s and bought %s. Inventory ID: %d.', # nuyen, itemname, invid
'5191' => 'You sold %d of your %s for %s. You now carry %s/%s.', # amount, itemname, nuyen, weight, maxweight
'5192' => 'You attempt to steal %s...', # itemname
'5193' => 'You were lucky and able to steal %s.',
'5194' => 'You cannot find the right moment to steal something.',
'5195' => 'You are out of luck ... the shop owner silently called the cops and you are put into Delaware Prison.',
'5196' => 'You are out of luck ... the shop owner silently called the cops ...',
'5197' => 'The shop owner is watching ... you better wait a bit.',
'5198' => 'The salesman smiles and puts the item in the shop window.',
'5199' => 'Trains: %s.', # target fmt_sumlist
'5200' => '%s paid the price of %s and you take the next train to %s. ETA: %s.', # player, nuyen, target, eta
'5201' => '%s consumed an item: %s. %s seconds busy.', # player, itemname, busytime
'5202' => 'Possible targets: %s.', # Computer target list fmt_rawitems.
'5203' => 'You put your %s into the inventory, %s seconds busy.', # itemname, busytime
'5204' => 'You use %s from now on, %d seconds busy.', # itemname, busytime
'5205' => 'You are out of ammo!',
'5206' => '%s loads %d bullet(s) into his %s. %s seconds busy.', # player, amount, itemname, busytime
'5207' => 'You load %d bullet(s) into your %s.', # amount, itemname
'5208' => 'You pay %s and the smith cleans the %s from all it\'s runes. You receive a(n): %s.', # price, itemname, itemname
'5209' => 'You pay %s and break the %s into %s.', # price, itemname, rawlist
'5210' => 'You pay %s but breaking the %s into runes failed.', # price, itemname
'5211' => 'The smith examines your items ... "It would cost you %s to upgrade your %s with %s. The fail chance is %.02f%% and the break chance is %.02f%%. Please retype to confirm.',
'5212' => 'The smith takes your items and goes to work...',
'5213' => 'The upgrade horrible failed and the item and the rune is lost. The smith is very sorry and you don`t need to pay any money.',
'5214' => 'The upgrade failed and the rune is lost. You only need to pay %s for the work.',
'5215' => 'The upgrade succeeded. You pay %s and the smith presents you a fine %s.',
'5216' => 'It would cost %s to split the %s. Retype your command to confirm.',
'5217' => 'You pay %s and split your %s into %s.',
'5218' => 'You start to to crack the lock on %s\'s %s. Time penalty: %s.',
'5219' => '%s is trying to \X02crack the LOCK\X02 on your %s!',
'5220' => 'You failed to crack the lock on %s\'s %s.',
'5221' => 'You are done with cracking your target\'s lock.',
'5222' => '"Hey, what are you doing!!!" ... You spot a police officer approaching!',
'5223' => 'You managed to crack the lock on %s\'s %s but it seems empty.',
'5224' => 'You managed to crack the lock on %s\'s',
'5225' => '%s managed to crack your lock on your %s!',
'5226' => 'In the last second you see military forces approaching and decide to interrupt your activities.',
'5227' => '%s stole %dx%s out of your %s.',
'5228' => '%s used %s on %s. %s%s', # player, itemname, player, busy, appendmsg # (friend)
'5229' => '%s used %s on %s. %s', # player, itemname, player, appendmsg # (foe)
'5230' => '%s attacks %s with %s but misses. %s seconds busy.',
'5231' => '%s attacks %s with %s but caused no damage. %s seconds busy.',
'5232' => '%1$s attacks %2$s with %3$s and caused %6$s%4$s damage%6$s. %5$s seconds busy.',
'5233' => '%1$s attacks %2$s with %3$s and caused %8$s%4$s damage%8$s, %5$s/%6$sHP left. %7$s seconds busy.',
'5234' => '%1$s attacks %2$s with %3$s and killed them with %8$s%4$s damage%8$s, %5$s seconds busy. You loot %6$s and %7$sXP.',
'5235' => '%1$s attacks %2$s with %3$s and killed them with %6$s%4$s damage%6$s, %5$s seconds busy.',
'5236' => 'You got a new quest: %s.',
'5237' => 'You declined the "%s" quest, forever.',
'5238' => 'You have completed a quest: %s.',
'5239' => 'You hand %d %s(s) to %s.',
'5240' => 'You received %s.', # quest reward string
'5241' => 'In Shadowlamb v3 there are: %s different NPC in %s Areas with %s Locations. %s Items, %s Spells and %s Quests. Try #stats to show how many are playing.',
'5242' => 'The party stopped. What now?!',
'5243' => 'It is the year 2064 + %s.',
'5244' => 'Currently there are %s Human, %s NPC and %s parties in memory.',
'5245' => 'Your character has been deleted. You may issue "#start" again.',
'5246' => 'This will completely delete your character. Type "#reset i_am_sure" to confirm.',
'5247' => 'Active players, page %d of %d: %s.',
'5248' => 'Active parties, page %s of %s: %s.',
'5249' => 'Message of the day: %s',
'5250' => 'You know a new %s: %s.', # knowledge, what, field
'5251' => "You now have {$b}%d(+%d) karma{$b}. With karma you can #lvlup.",
'5252' => 'You respawn at %s.',
'5253' => 'You lost %s XP!',
'5254' => 'You lost %s!', # nuyen
'5255' => 'You lost %d of your %s.',
'5256' => 'You played #running_mode and got killed by an NPC or other #rm player. You are dead. Use #reset to start over.',
'5257' => '%s', # Arrive city message.
'5258' => '%s', # clan message
'5259' => 'Trains: %s.', # Travel target list fmt_sumlist.
'5260' => 'You gained +%s MP (%s/%s).', # From orcas effect
'5261' => 'You gained +%s HP (%s/%s).', # From elpehants effect
);
?>