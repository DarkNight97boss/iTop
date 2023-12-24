<?php
// Copyright (C) 2010-2023 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>
/**
 * @copyright   Copyright (C) 2010-2023 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Relation:impacts/Description'    => 'Elementi impattati da...',
	'Relation:impacts/DownStream'     => 'Impatto...',
	'Relation:impacts/DownStream+'    => 'Elementi impattati da...',
	'Relation:impacts/UpStream'       => 'Dipende da...',
	'Relation:impacts/UpStream+'      => 'Elementi di questo elemento dipende da',
	// Legacy entries
	'Relation:depends on/Description' => 'Elementi di questo elemento dipende da',
	'Relation:depends on/DownStream'  => 'Dipende da...',
	'Relation:depends on/UpStream'    => 'Impatto...',
    'Relation:impacts/LoadData'       => 'Carica dati~~',
    'Relation:impacts/NoFilteredData' => 'seleziona oggetti e carica dati~~',
    'Relation:impacts/FilteredData'   => 'Dati filtrati~~',
));


// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+
// Class:<class_name>/UniquenessRule:<rule_code>
// Class:<class_name>/UniquenessRule:<rule_code>+

//////////////////////////////////////////////////////////////////////
// Classes in 'bizmodel'
//////////////////////////////////////////////////////////////////////
//

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+
// Class:<class_name>/UniquenessRule:<rule_code>
// Class:<class_name>/UniquenessRule:<rule_code>+

//////////////////////////////////////////////////////////////////////
// Note: The classes have been grouped by categories: bizmodel
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
// Classes in 'bizmodel'
//////////////////////////////////////////////////////////////////////
//

//
// Class: lnkContactToFunctionalCI
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:lnkContactToFunctionalCI' => 'Link Contact / FunctionalCI~~',
	'Class:lnkContactToFunctionalCI+' => '~~',
	'Class:lnkContactToFunctionalCI/Name' => '%1$s / %2$s~~',
	'Class:lnkContactToFunctionalCI/Attribute:functionalci_id' => 'Functionalci~~',
	'Class:lnkContactToFunctionalCI/Attribute:functionalci_id+' => '~~',
    'Class:lnkContactToFunctionalCI/Attribute:functionalci_name' => 'Nome Functionalci~~',
    'Class:lnkContactToFunctionalCI/Attribute:functionalci_name+' => '~~',
    'Class:lnkContactToFunctionalCI/Attribute:contact_id' => 'Contatto~~',
    'Class:lnkContactToFunctionalCI/Attribute:contact_id+' => '~~',
    'Class:lnkContactToFunctionalCI/Attribute:contact_name' => 'Nome Contatto~~',
    'Class:lnkContactToFunctionalCI/Attribute:contact_name+' => '~~',
));

//
// Class: FunctionalCI
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
    'Class:FunctionalCI' => 'CI Funzionale',
    'Class:FunctionalCI+' => '',
    'Class:FunctionalCI/Attribute:name' => 'Nome',
    'Class:FunctionalCI/Attribute:name+' => '',
    'Class:FunctionalCI/Attribute:description' => 'Descrizione~~',
    'Class:FunctionalCI/Attribute:description+' => '~~',
    'Class:FunctionalCI/Attribute:org_id' => 'Organizzazione proprietaria',
    'Class:FunctionalCI/Attribute:org_id+' => '',
    'Class:FunctionalCI/Attribute:organization_name' => 'Nome Organizzazione~~',
    'Class:FunctionalCI/Attribute:organization_name+' => 'Nome comune~~',
    'Class:FunctionalCI/Attribute:business_criticity' => 'Criticità aziendale~~',
    'Class:FunctionalCI/Attribute:business_criticity+' => '~~',
    'Class:FunctionalCI/Attribute:business_criticity/Value:high' => 'alta~~',
    'Class:FunctionalCI/Attribute:business_criticity/Value:high+' => 'alta~~',
    'Class:FunctionalCI/Attribute:business_criticity/Value:low' => 'bassa~~',
    'Class:FunctionalCI/Attribute:business_criticity/Value:low+' => 'bassa~~',
    'Class:FunctionalCI/Attribute:business_criticity/Value:medium' => 'media~~',
    'Class:FunctionalCI/Attribute:business_criticity/Value:medium+' => 'media~~',
    'Class:FunctionalCI/Attribute:move2production' => 'Data di passaggio alla produzione~~',
    'Class:FunctionalCI/Attribute:move2production+' => '~~',
    'Class:FunctionalCI/Attribute:contacts_list' => 'Contatti~~',
    'Class:FunctionalCI/Attribute:contacts_list+' => 'Tutti i contatti per questo elemento di configurazione~~',
    'Class:FunctionalCI/Attribute:documents_list' => 'Documenti~~',
    'Class:FunctionalCI/Attribute:documents_list+' => 'Tutti i documenti collegati a questo elemento di configurazione~~',
    'Class:FunctionalCI/Attribute:applicationsolution_list' => 'Soluzioni applicative~~',
    'Class:FunctionalCI/Attribute:applicationsolution_list+' => 'Tutte le soluzioni applicative dipendenti da questo elemento di configurazione~~',
    'Class:FunctionalCI/Attribute:softwares_list' => 'Software~~',
    'Class:FunctionalCI/Attribute:softwares_list+' => 'Tutti i software installati su questo elemento di configurazione~~',
    'Class:FunctionalCI/Attribute:finalclass' => 'Tipo',
    'Class:FunctionalCI/Attribute:finalclass+' => '',
    'Class:FunctionalCI/Tab:OpenedTickets' => 'Ticket attivi~~',
    'Class:FunctionalCI/Tab:OpenedTickets+' => 'Ticket attivi che stanno influenzando questa CI funzionale~~',
));

//
// Class: PhysicalDevice
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
    'Class:PhysicalDevice' => 'Dispositivo Fisico~~',
	'Class:PhysicalDevice+' => '~~',
	'Class:PhysicalDevice/ComplementaryName' => '%1$s - %2$s~~',
    'Class:PhysicalDevice/Attribute:serialnumber' => 'Numero di serie~~',
    'Class:PhysicalDevice/Attribute:serialnumber+' => '~~',
    'Class:PhysicalDevice/Attribute:location_id' => 'Posizione~~',
    'Class:PhysicalDevice/Attribute:location_id+' => '~~',
    'Class:PhysicalDevice/Attribute:location_name' => 'Nome Posizione~~',
    'Class:PhysicalDevice/Attribute:location_name+' => '~~',
    'Class:PhysicalDevice/Attribute:status' => 'Stato~~',
    'Class:PhysicalDevice/Attribute:status+' => '~~',
    'Class:PhysicalDevice/Attribute:status/Value:implementation' => 'implementazione~~',
    'Class:PhysicalDevice/Attribute:status/Value:implementation+' => 'implementazione~~',
    'Class:PhysicalDevice/Attribute:status/Value:obsolete' => 'obsoleto~~',
    'Class:PhysicalDevice/Attribute:status/Value:obsolete+' => 'obsoleto~~',
    'Class:PhysicalDevice/Attribute:status/Value:production' => 'produzione~~',
    'Class:PhysicalDevice/Attribute:status/Value:production+' => 'produzione~~',
    'Class:PhysicalDevice/Attribute:status/Value:stock' => 'magazzino~~',
    'Class:PhysicalDevice/Attribute:status/Value:stock+' => 'magazzino~~',
    'Class:PhysicalDevice/Attribute:brand_id' => 'Marca~~',
    'Class:PhysicalDevice/Attribute:brand_id+' => '~~',
    'Class:PhysicalDevice/Attribute:brand_name' => 'Nome Marca~~',
    'Class:PhysicalDevice/Attribute:brand_name+' => '~~',
    'Class:PhysicalDevice/Attribute:model_id' => 'Modello~~',
    'Class:PhysicalDevice/Attribute:model_id+' => '~~',
    'Class:PhysicalDevice/Attribute:model_name' => 'Nome Modello~~',
    'Class:PhysicalDevice/Attribute:model_name+' => '~~',
    'Class:PhysicalDevice/Attribute:asset_number' => 'Numero di asset~~',
    'Class:PhysicalDevice/Attribute:asset_number+' => '~~',
    'Class:PhysicalDevice/Attribute:purchase_date' => 'Data di acquisto~~',
    'Class:PhysicalDevice/Attribute:purchase_date+' => '~~',
    'Class:PhysicalDevice/Attribute:end_of_warranty' => 'Scadenza garanzia~~',
    'Class:PhysicalDevice/Attribute:end_of_warranty+' => '~~',
));

//
// Class: Rack
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Rack' => 'Rack~~',
	'Class:Rack+' => '~~',
	'Class:Rack/ComplementaryName' => '%1$s - %2$s~~',
	'Class:Rack/Attribute:nb_u' => 'Unità Rack~~',
	'Class:Rack/Attribute:nb_u+' => '~~',
	'Class:Rack/Attribute:device_list' => 'Dispositivi~~',
	'Class:Rack/Attribute:device_list+' => 'Tutti i dispositivi fisici installati in questo rack~~',
	'Class:Rack/Attribute:enclosure_list' => 'Contenitori~~',
	'Class:Rack/Attribute:enclosure_list+' => 'Tutti i contenitori in questo rack~~',
));

//
// Class: TelephonyCI
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:TelephonyCI' => 'CI Telefoni~~',
	'Class:TelephonyCI+' => '~~',
	'Class:TelephonyCI/Attribute:phonenumber' => 'Numero di telefono~~',
	'Class:TelephonyCI/Attribute:phonenumber+' => '~~',
));

//
// Class: Phone
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Phone' => 'Telefono fisso~~',
	'Class:Phone+' => '~~',
));

//
// Class: MobilePhone
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:MobilePhone' => 'Cellulari',
	'Class:MobilePhone+' => '',
	'Class:MobilePhone/Attribute:imei' => 'IMEI',
	'Class:MobilePhone/Attribute:imei+' => '',
	'Class:MobilePhone/Attribute:hw_pin' => 'Hardware PIN',
	'Class:MobilePhone/Attribute:hw_pin+' => '',
));

//
// Class: IPPhone
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:IPPhone' => 'Telefoni IP / VoIP~~',
	'Class:IPPhone+' => '~~',
));

//
// Class: Tablet
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Tablet' => 'Tablet~~',
	'Class:Tablet+' => '~~',
));

//
// Class: ConnectableCI
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:ConnectableCI' => 'CI collegabile',
	'Class:ConnectableCI+' => 'CI fisico',
	'Class:ConnectableCI/ComplementaryName' => '%1$s - %2$s~~',
	'Class:ConnectableCI/Attribute:networkdevice_list' => 'Dispositivi di Rete~~',
	'Class:ConnectableCI/Attribute:networkdevice_list+' => 'Tutti i dispositivi di rete collegati a questo dispositivo~~',
	'Class:ConnectableCI/Attribute:physicalinterface_list' => 'Interfacce di Rete~~',
	'Class:ConnectableCI/Attribute:physicalinterface_list+' => 'Tutte le interfacce di rete fisiche~~',
));

//
// Class: DatacenterDevice
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:DatacenterDevice' => 'Datacenter Device~~',
	'Class:DatacenterDevice+' => '~~',
	'Class:DatacenterDevice/ComplementaryName' => '%1$s - %2$s~~','Class:DatacenterDevice/Attribute:rack_id' => 'Rack~~',
	'Class:DatacenterDevice/Attribute:rack_id+' => '~~',
	'Class:DatacenterDevice/Attribute:rack_name' => 'Nome Rack~~',
	'Class:DatacenterDevice/Attribute:rack_name+' => '~~',
	'Class:DatacenterDevice/Attribute:enclosure_id' => 'Contenitore~~',
	'Class:DatacenterDevice/Attribute:enclosure_id+' => '~~',
	'Class:DatacenterDevice/Attribute:enclosure_name' => 'Nome Contenitore~~',
	'Class:DatacenterDevice/Attribute:enclosure_name+' => '~~',
	'Class:DatacenterDevice/Attribute:nb_u' => 'Unità Rack~~',
	'Class:DatacenterDevice/Attribute:nb_u+' => '~~',
	'Class:DatacenterDevice/Attribute:managementip' => 'Indirizzo IP di Gestione~~',
	'Class:DatacenterDevice/Attribute:managementip+' => '~~',
	'Class:DatacenterDevice/Attribute:powerA_id' => 'Sorgente PowerA~~',
	'Class:DatacenterDevice/Attribute:powerA_id+' => '~~',
	'Class:DatacenterDevice/Attribute:powerA_name' => 'Nome Sorgente PowerA~~',
	'Class:DatacenterDevice/Attribute:powerA_name+' => '~~',
	'Class:DatacenterDevice/Attribute:powerB_id' => 'Sorgente PowerB~~',
	'Class:DatacenterDevice/Attribute:powerB_id+' => '~~',
	'Class:DatacenterDevice/Attribute:powerB_name' => 'Nome Sorgente PowerB~~',
	'Class:DatacenterDevice/Attribute:powerB_name+' => '~~',
	'Class:DatacenterDevice/Attribute:fiberinterfacelist_list' => 'Porte FC~~',
	'Class:DatacenterDevice/Attribute:fiberinterfacelist_list+' => 'Tutte le interfacce di canale a fibra per questo dispositivo~~',
	'Class:DatacenterDevice/Attribute:san_list' => 'SAN~~',
	'Class:DatacenterDevice/Attribute:san_list+' => 'Tutti gli switch SAN collegati a questo dispositivo~~',
	'Class:DatacenterDevice/Attribute:redundancy' => 'Ridondanza~~',
	'Class:DatacenterDevice/Attribute:redundancy/count' => 'Il dispositivo è operativo se almeno una connessione elettrica (A o B) è attiva~~',
	// Non utilizzato ancora
	'Class:DatacenterDevice/Attribute:redundancy/disabled' => 'Il dispositivo è operativo se tutte le sue connessioni elettriche sono attive~~',
	'Class:DatacenterDevice/Attribute:redundancy/percent' => 'Il dispositivo è operativo se almeno il %1$s %% delle sue connessioni elettriche sono attive~~',
));

//
// Class: NetworkDevice
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:NetworkDevice' => 'Dispositivi di rete',
	'Class:NetworkDevice+' => '',
	'Class:NetworkDevice/ComplementaryName' => '%1$s - %2$s~~',
	'Class:NetworkDevice/Attribute:networkdevicetype_id' => 'Tipo di Rete~~',
	'Class:NetworkDevice/Attribute:networkdevicetype_id+' => '~~',
	'Class:NetworkDevice/Attribute:networkdevicetype_name' => 'Nome Tipo di Rete~~',
	'Class:NetworkDevice/Attribute:networkdevicetype_name+' => '~~',
	'Class:NetworkDevice/Attribute:connectablecis_list' => 'Dispositivi~~',
	'Class:NetworkDevice/Attribute:connectablecis_list+' => 'Tutti i dispositivi collegati a questo dispositivo di rete~~',
	'Class:NetworkDevice/Attribute:iosversion_id' => 'Versione IOS~~',
	'Class:NetworkDevice/Attribute:iosversion_id+' => '~~',
	'Class:NetworkDevice/Attribute:iosversion_name' => 'Nome Versione IOS~~',
	'Class:NetworkDevice/Attribute:iosversion_name+' => '~~',
	'Class:NetworkDevice/Attribute:ram' => 'RAM',
	'Class:NetworkDevice/Attribute:ram+' => '',
));

//
// Class: Server
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Server' => 'Server',
	'Class:Server+' => '',
	'Class:Server/ComplementaryName' => '%1$s - %2$s~~',
	'Class:Server/Attribute:osfamily_id' => 'Famiglia OS~~',
	'Class:Server/Attribute:osfamily_id+' => '~~',
	'Class:Server/Attribute:osfamily_name' => 'Nome Famiglia OS~~',
	'Class:Server/Attribute:osfamily_name+' => '~~',
	'Class:Server/Attribute:osversion_id' => 'Versione OS~~',
	'Class:Server/Attribute:osversion_id+' => '~~',
	'Class:Server/Attribute:osversion_name' => 'Nome Versione OS~~',
	'Class:Server/Attribute:osversion_name+' => '~~',
	'Class:Server/Attribute:oslicence_id' => 'Licenza OS~~',
	'Class:Server/Attribute:oslicence_id+' => '~~',
	'Class:Server/Attribute:oslicence_name' => 'Nome Licenza OS~~',
	'Class:Server/Attribute:oslicence_name+' => '~~',
	'Class:Server/Attribute:cpu' => 'CPU',
	'Class:Server/Attribute:cpu+' => '',
	'Class:Server/Attribute:ram' => 'RAM',
	'Class:Server/Attribute:ram+' => '',
	'Class:Server/Attribute:logicalvolumes_list' => 'Volumi Logici~~',
	'Class:Server/Attribute:logicalvolumes_list+' => 'Tutti i volumi logici collegati a questo server~~',
));

//
// Class: StorageSystem
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:StorageSystem' => 'Sistema di Archiviazione~~',
	'Class:StorageSystem+' => '~~',
	'Class:StorageSystem/ComplementaryName' => '%1$s - %2$s~~',
	'Class:StorageSystem/Attribute:logicalvolume_list' => 'Volumi Logici~~',
	'Class:StorageSystem/Attribute:logicalvolume_list+' => 'Tutti i volumi logici in questo sistema di archiviazione~~',
));

//
// Class: SANSwitch
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:SANSwitch' => 'SAN Switch~~',
	'Class:SANSwitch+' => '~~',
	'Class:SANSwitch/ComplementaryName' => '%1$s - %2$s~~',
	'Class:SANSwitch/Attribute:datacenterdevice_list' => 'Dispositivi~~',
	'Class:SANSwitch/Attribute:datacenterdevice_list+' => 'Tutti i dispositivi collegati a questo switch SAN~~',
));

//
// Class: TapeLibrary
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:TapeLibrary' => 'Libreria di Nastri~~',
	'Class:TapeLibrary+' => '~~',
	'Class:TapeLibrary/ComplementaryName' => '%1$s - %2$s~~',
	'Class:TapeLibrary/Attribute:tapes_list' => 'Nastri~~',
	'Class:TapeLibrary/Attribute:tapes_list+' => 'Tutti i nastri nella libreria di nastri~~',
));

//
// Class: NAS
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:NAS' => 'NAS~~',
	'Class:NAS+' => '~~',
	'Class:NAS/ComplementaryName' => '%1$s - %2$s~~',
	'Class:NAS/Attribute:nasfilesystem_list' => 'File System~~',
	'Class:NAS/Attribute:nasfilesystem_list+' => 'Tutti i file system in questo NAS~~',
));

//
// Class: PC
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:PC' => 'PC',
	'Class:PC+' => '',
	'Class:PC/ComplementaryName' => '%1$s - %2$s~~',
	'Class:PC/Attribute:osfamily_id' => 'Famiglia OS~~',
	'Class:PC/Attribute:osfamily_id+' => '~~',
	'Class:PC/Attribute:osfamily_name' => 'Nome Famiglia OS~~',
	'Class:PC/Attribute:osfamily_name+' => '~~',
	'Class:PC/Attribute:osversion_id' => 'Versione OS~~',
	'Class:PC/Attribute:osversion_id+' => '~~',
	'Class:PC/Attribute:osversion_name' => 'Nome Versione OS~~',
	'Class:PC/Attribute:osversion_name+' => '~~',
	'Class:PC/Attribute:cpu' => 'CPU',
	'Class:PC/Attribute:cpu+' => '',
	'Class:PC/Attribute:ram' => 'RAM',
	'Class:PC/Attribute:ram+' => '',
	'Class:PC/Attribute:type' => 'Tipo~~',
	'Class:PC/Attribute:type+' => '~~',
	'Class:PC/Attribute:type/Value:desktop' => 'desktop~~',
	'Class:PC/Attribute:type/Value:desktop+' => 'desktop~~',
	'Class:PC/Attribute:type/Value:laptop' => 'laptop~~',
	'Class:PC/Attribute:type/Value:laptop+' => 'laptop~~',
));

//
// Class: Printer
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Printer' => 'Stampante',
	'Class:Printer+' => '',
	'Class:Printer/ComplementaryName' => '%1$s - %2$s~~',
));

//
// Class: PowerConnection
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:PowerConnection' => 'Connessione di Alimentazione~~',
	'Class:PowerConnection+' => '~~',
	'Class:PowerConnection/ComplementaryName' => '%1$s - %2$s~~',

));

//
// Class: PowerSource
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:PowerSource' => 'Sorgente di Alimentazione~~',
	'Class:PowerSource+' => '~~',
	'Class:PowerSource/ComplementaryName' => '%1$s - %2$s~~',
	'Class:PowerSource/Attribute:pdus_list' => 'PDU~~',
	'Class:PowerSource/Attribute:pdus_list+' => 'Tutte le PDU che utilizzano questa sorgente di alimentazione~~',

));

//
// Class: PDU
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:PDU' => 'PDU~~',
	'Class:PDU+' => '~~',
	'Class:PDU/ComplementaryName' => '%1$s - %2$s - %3$s - %4$s~~',
	'Class:PDU/Attribute:rack_id' => 'Rack~~',
	'Class:PDU/Attribute:rack_id+' => '~~',
	'Class:PDU/Attribute:rack_name' => 'Nome Rack~~',
	'Class:PDU/Attribute:rack_name+' => '~~',
	'Class:PDU/Attribute:powerstart_id' => 'Avvio Alimentazione~~',
	'Class:PDU/Attribute:powerstart_id+' => '~~',
	'Class:PDU/Attribute:powerstart_name' => 'Nome Avvio Alimentazione~~',
	'Class:PDU/Attribute:powerstart_name+' => '~~',

));

//
// Class: Peripheral
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Peripheral' => 'Periferica~~',
	'Class:Peripheral+' => '~~',
	'Class:Peripheral/ComplementaryName' => '%1$s - %2$s~~',

));

//
// Class: Enclosure
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Enclosure' => 'Contenitore~~',
	'Class:Enclosure+' => '~~',
	'Class:Enclosure/ComplementaryName' => '%1$s - %2$s - %3$s~~',
	'Class:Enclosure/Attribute:rack_id' => 'Rack~~',
	'Class:Enclosure/Attribute:rack_id+' => '~~',
	'Class:Enclosure/Attribute:rack_name' => 'Nome Rack~~',
	'Class:Enclosure/Attribute:rack_name+' => '~~',
	'Class:Enclosure/Attribute:nb_u' => 'Unità Rack~~',
	'Class:Enclosure/Attribute:nb_u+' => '~~',
	'Class:Enclosure/Attribute:device_list' => 'Dispositivi~~',
	'Class:Enclosure/Attribute:device_list+' => 'Tutti i dispositivi in questo contenitore~~',

));

//
// Class: ApplicationSolution
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:ApplicationSolution' => 'Soluzione Applicativa',
	'Class:ApplicationSolution+' => '',
	'Class:ApplicationSolution/Attribute:functionalcis_list' => 'CIs~~',
	'Class:ApplicationSolution/Attribute:functionalcis_list+' => 'Tutti gli elementi di configurazione che compongono questa soluzione applicativa~~',
	'Class:ApplicationSolution/Attribute:businessprocess_list' => 'Processi aziendali~~',
	'Class:ApplicationSolution/Attribute:businessprocess_list+' => 'Tutti i processi aziendali dipendenti da questa soluzione applicativa~~',
	'Class:ApplicationSolution/Attribute:status' => 'Stato~~',
	'Class:ApplicationSolution/Attribute:status+' => '~~',
	'Class:ApplicationSolution/Attribute:status/Value:active' => 'attivo~~',
	'Class:ApplicationSolution/Attribute:status/Value:active+' => 'attivo~~',
	'Class:ApplicationSolution/Attribute:status/Value:inactive' => 'inattivo~~',
	'Class:ApplicationSolution/Attribute:status/Value:inactive+' => 'inattivo~~',
	'Class:ApplicationSolution/Attribute:redundancy' => 'Analisi impatto: configurazione della ridondanza~~',
	'Class:ApplicationSolution/Attribute:redundancy/disabled' => 'La soluzione è attiva se tutti gli elementi di configurazione sono attivi~~',
	'Class:ApplicationSolution/Attribute:redundancy/count' => 'La soluzione è attiva se almeno %1$s elemento(i) di configurazione sono attivi~~',
	'Class:ApplicationSolution/Attribute:redundancy/percent' => 'La soluzione è attiva se almeno il %1$s %% degli elementi di configurazione sono attivi~~',

));

//
// Class: BusinessProcess
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:BusinessProcess' => 'Processi Aziendali',
	'Class:BusinessProcess+' => '',
	'Class:BusinessProcess/Attribute:applicationsolutions_list' => 'Soluzioni Applicative~~',
	'Class:BusinessProcess/Attribute:applicationsolutions_list+' => 'Tutte le soluzioni applicative che influenzano questo processo aziendale~~',
	'Class:BusinessProcess/Attribute:status' => 'Stato~~',
	'Class:BusinessProcess/Attribute:status+' => '~~',
	'Class:BusinessProcess/Attribute:status/Value:active' => 'attivo~~',
	'Class:BusinessProcess/Attribute:status/Value:active+' => 'attivo~~',
	'Class:BusinessProcess/Attribute:status/Value:inactive' => 'inattivo~~',
	'Class:BusinessProcess/Attribute:status/Value:inactive+' => 'inattivo~~',

));

//
// Class: SoftwareInstance
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:SoftwareInstance' => 'Istanza Software',
	'Class:SoftwareInstance+' => '',
	'Class:SoftwareInstance/Attribute:system_id' => 'Sistema~~',
	'Class:SoftwareInstance/Attribute:system_id+' => '~~',
	'Class:SoftwareInstance/Attribute:system_name' => 'Nome Sistema~~',
	'Class:SoftwareInstance/Attribute:system_name+' => '~~',
	'Class:SoftwareInstance/Attribute:software_id' => 'Software~~',
	'Class:SoftwareInstance/Attribute:software_id+' => '~~',
	'Class:SoftwareInstance/Attribute:software_name' => 'Software',
	'Class:SoftwareInstance/Attribute:software_name+' => '',
	'Class:SoftwareInstance/Attribute:softwarelicence_id' => 'Licenza Software~~',
	'Class:SoftwareInstance/Attribute:softwarelicence_id+' => '~~',
	'Class:SoftwareInstance/Attribute:softwarelicence_name' => 'Nome Licenza Software~~',
	'Class:SoftwareInstance/Attribute:softwarelicence_name+' => '~~',
	'Class:SoftwareInstance/Attribute:path' => 'Percorso~~',
	'Class:SoftwareInstance/Attribute:path+' => '~~',
	'Class:SoftwareInstance/Attribute:status' => 'Stato~~',
	'Class:SoftwareInstance/Attribute:status+' => '~~',
	'Class:SoftwareInstance/Attribute:status/Value:active' => 'attivo~~',
	'Class:SoftwareInstance/Attribute:status/Value:active+' => 'attivo~~',
	'Class:SoftwareInstance/Attribute:status/Value:inactive' => 'inattivo~~',
	'Class:SoftwareInstance/Attribute:status/Value:inactive+' => 'inattivo~~',

));

//
// Class: Middleware
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Middleware' => 'Middleware~~',
	'Class:Middleware+' => '~~',
	'Class:Middleware/Attribute:middlewareinstance_list' => 'Istanze Middleware~~',
	'Class:Middleware/Attribute:middlewareinstance_list+' => 'Tutte le istanze del middleware fornite da questo middleware~~',

));

//
// Class: DBServer
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:DBServer' => 'Database',
	'Class:DBServer+' => 'Database server SW',
	'Class:DBServer/Attribute:dbschema_list' => 'Schema Database~~',
	'Class:DBServer/Attribute:dbschema_list+' => 'Tutti gli schemi del database per questo server di database~~',


//
// Class: WebServer
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:WebServer' => 'Server Web~~',
	'Class:WebServer+' => '~~',
	'Class:WebServer/Attribute:webapp_list' => 'Applicazioni Web~~',
	'Class:WebServer/Attribute:webapp_list+' => 'Tutte le applicazioni web disponibili su questo server web~~',

));

//
// Class: PCSoftware
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:PCSoftware' => 'Software PC~~',
	'Class:PCSoftware+' => '~~',

));

//
// Class: OtherSoftware
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:OtherSoftware' => 'Altro Software~~',
	'Class:OtherSoftware+' => '~~',

));

//
// Class: MiddlewareInstance
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:MiddlewareInstance' => 'Istanza Middleware~~',
	'Class:MiddlewareInstance+' => '~~',
	'Class:MiddlewareInstance/ComplementaryName' => '%1$s - %2$s~~',
	'Class:MiddlewareInstance/Attribute:middleware_id' => 'Middleware~~',
	'Class:MiddlewareInstance/Attribute:middleware_id+' => '~~',
	'Class:MiddlewareInstance/Attribute:middleware_name' => 'Nome Middleware~~',
	'Class:MiddlewareInstance/Attribute:middleware_name+' => '~~',

));

//
// Class: DatabaseSchema
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:DatabaseSchema' => 'Schema del Database~~',
	'Class:DatabaseSchema+' => '~~',
	'Class:DatabaseSchema/ComplementaryName' => '%1$s - %2$s~~',
	'Class:DatabaseSchema/Attribute:dbserver_id' => 'Server del Database~~',
	'Class:DatabaseSchema/Attribute:dbserver_id+' => '~~',
	'Class:DatabaseSchema/Attribute:dbserver_name' => 'Nome Server del Database~~',
	'Class:DatabaseSchema/Attribute:dbserver_name+' => '~~',

));

//
// Class: WebApplication
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:WebApplication' => 'Web Application~~',
	'Class:WebApplication+' => '~~',
	'Class:WebApplication/ComplementaryName' => '%1$s - %2$s~~',
	'Class:WebApplication/Attribute:webserver_id' => 'Web server~~',
	'Class:WebApplication/Attribute:webserver_id+' => '~~',
	'Class:WebApplication/Attribute:webserver_name' => 'Nome del server Web~~',
	'Class:WebApplication/Attribute:webserver_name+' => '~~',
	'Class:WebApplication/Attribute:url' => 'URL~~',
	'Class:WebApplication/Attribute:url+' => '~~',

));


//
// Class: VirtualDevice
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:VirtualDevice' => 'Dispositivo Virtuale',
	'Class:VirtualDevice+' => '~~',
	'Class:VirtualDevice/Attribute:status' => 'Stato',
	'Class:VirtualDevice/Attribute:status+' => '~~',
	'Class:VirtualDevice/Attribute:status/Value:implementation' => 'Implementazione',
	'Class:VirtualDevice/Attribute:status/Value:implementation+' => 'Implementazione',
	'Class:VirtualDevice/Attribute:status/Value:obsolete' => 'Obsoleto',
	'Class:VirtualDevice/Attribute:status/Value:obsolete+' => 'Obsoleto',
	'Class:VirtualDevice/Attribute:status/Value:production' => 'Produzione',
	'Class:VirtualDevice/Attribute:status/Value:production+' => 'Produzione',
	'Class:VirtualDevice/Attribute:status/Value:stock' => 'In Stock',
	'Class:VirtualDevice/Attribute:status/Value:stock+' => 'In Stock',
	'Class:VirtualDevice/Attribute:logicalvolumes_list' => 'Volumi Logici',
	'Class:VirtualDevice/Attribute:logicalvolumes_list+' => 'Tutti i volumi logici utilizzati da questo dispositivo',

));

//
// Class: VirtualHost
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:VirtualHost' => 'Host Virtuale',
	'Class:VirtualHost+' => '~~',
	'Class:VirtualHost/Attribute:virtualmachine_list' => 'Macchine Virtuali',
	'Class:VirtualHost/Attribute:virtualmachine_list+' => 'Tutte le macchine virtuali ospitate da questo host',

));

//
// Class: Hypervisor
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Hypervisor' => 'Hypervisor',
	'Class:Hypervisor+' => '~~',
	'Class:Hypervisor/Attribute:farm_id' => 'Farm',
	'Class:Hypervisor/Attribute:farm_id+' => '~~',
	'Class:Hypervisor/Attribute:farm_name' => 'Nome Farm',
	'Class:Hypervisor/Attribute:farm_name+' => '~~',
	'Class:Hypervisor/Attribute:server_id' => 'Server',
	'Class:Hypervisor/Attribute:server_id+' => '~~',
	'Class:Hypervisor/Attribute:server_name' => 'Nome Server',
	'Class:Hypervisor/Attribute:server_name+' => '~~',

));

//
// Class: Farm
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Farm' => 'Farm~~',
	'Class:Farm+' => '~~',
	'Class:Farm/Attribute:hypervisor_list' => 'Hypervisors~~',
	'Class:Farm/Attribute:hypervisor_list+' => 'Tutti gli hypervisor che compongono questa farm~~',
	'Class:Farm/Attribute:redundancy' => 'Alta disponibilità~~',
	'Class:Farm/Attribute:redundancy/disabled' => 'La farm è attiva se tutti gli hypervisor sono attivi~~',
	'Class:Farm/Attribute:redundancy/count' => 'La farm è attiva se almeno %1$s hypervisor è(sono) attivo(i)~~',
	'Class:Farm/Attribute:redundancy/percent' => 'La farm è attiva se almeno %1$s %% degli hypervisor è attivo~~',

));

//
// Class: VirtualMachine
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:VirtualMachine' => 'Macchina Virtuale~~',
	'Class:VirtualMachine+' => '~~',
	'Class:VirtualMachine/ComplementaryName' => '%1$s - %2$s~~',
	'Class:VirtualMachine/Attribute:virtualhost_id' => 'Host Virtuale~~',
	'Class:VirtualMachine/Attribute:virtualhost_id+' => '~~',
	'Class:VirtualMachine/Attribute:virtualhost_name' => 'Nome Host Virtuale~~',
	'Class:VirtualMachine/Attribute:virtualhost_name+' => '~~',
	'Class:VirtualMachine/Attribute:osfamily_id' => 'Famiglia del Sistema Operativo~~',
	'Class:VirtualMachine/Attribute:osfamily_id+' => '~~',
	'Class:VirtualMachine/Attribute:osfamily_name' => 'Nome della Famiglia del Sistema Operativo~~',
	'Class:VirtualMachine/Attribute:osfamily_name+' => '~~',
	'Class:VirtualMachine/Attribute:osversion_id' => 'Versione del Sistema Operativo~~',
	'Class:VirtualMachine/Attribute:osversion_id+' => '~~',
	'Class:VirtualMachine/Attribute:osversion_name' => 'Nome della Versione del Sistema Operativo~~',
	'Class:VirtualMachine/Attribute:osversion_name+' => '~~',
	'Class:VirtualMachine/Attribute:oslicence_id' => 'Licenza del Sistema Operativo~~',
	'Class:VirtualMachine/Attribute:oslicence_id+' => '~~',
	'Class:VirtualMachine/Attribute:oslicence_name' => 'Nome della Licenza del Sistema Operativo~~',
	'Class:VirtualMachine/Attribute:oslicence_name+' => '~~',
	'Class:VirtualMachine/Attribute:cpu' => 'CPU~~',
	'Class:VirtualMachine/Attribute:cpu+' => '~~',
	'Class:VirtualMachine/Attribute:ram' => 'RAM~~',
	'Class:VirtualMachine/Attribute:ram+' => '~~',
	'Class:VirtualMachine/Attribute:managementip' => 'IP di Gestione~~',
	'Class:VirtualMachine/Attribute:managementip+' => '~~',
	'Class:VirtualMachine/Attribute:logicalinterface_list' => 'Interfacce di Rete Logiche~~',
	'Class:VirtualMachine/Attribute:logicalinterface_list+' => 'Tutte le interfacce di rete logiche~~',

));

//
// Class: LogicalVolume
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:LogicalVolume' => 'Volume Logico~~',
	'Class:LogicalVolume+' => '~~',
	'Class:LogicalVolume/Attribute:name' => 'Nome~~',
	'Class:LogicalVolume/Attribute:name+' => '~~',
	'Class:LogicalVolume/Attribute:lun_id' => 'ID LUN~~',
	'Class:LogicalVolume/Attribute:lun_id+' => '~~',
	'Class:LogicalVolume/Attribute:description' => 'Descrizione~~',
	'Class:LogicalVolume/Attribute:description+' => '~~',
	'Class:LogicalVolume/Attribute:raid_level' => 'Livello di RAID~~',
	'Class:LogicalVolume/Attribute:raid_level+' => '~~',
	'Class:LogicalVolume/Attribute:size' => 'Dimensione~~',
	'Class:LogicalVolume/Attribute:size+' => '~~',
	'Class:LogicalVolume/Attribute:storagesystem_id' => 'Sistema di Archiviazione~~',
	'Class:LogicalVolume/Attribute:storagesystem_id+' => '~~',
	'Class:LogicalVolume/Attribute:storagesystem_name' => 'Nome del Sistema di Archiviazione~~',
	'Class:LogicalVolume/Attribute:storagesystem_name+' => '~~',
	'Class:LogicalVolume/Attribute:servers_list' => 'Server~~',
	'Class:LogicalVolume/Attribute:servers_list+' => 'Tutti i server che utilizzano questo volume~~',
	'Class:LogicalVolume/Attribute:virtualdevices_list' => 'Dispositivi Virtuali~~',
	'Class:LogicalVolume/Attribute:virtualdevices_list+' => 'Tutti i dispositivi virtuali che utilizzano questo volume~~',

));

//
// Class: lnkServerToVolume
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:lnkServerToVolume' => 'Collegamento Server / Volume~~',
	'Class:lnkServerToVolume+' => '~~',
	'Class:lnkServerToVolume/Name' => '%1$s / %2$s~~',
	'Class:lnkServerToVolume/Attribute:volume_id' => 'Volume~~',
	'Class:lnkServerToVolume/Attribute:volume_id+' => '~~',
	'Class:lnkServerToVolume/Attribute:volume_name' => 'Nome del Volume~~',
	'Class:lnkServerToVolume/Attribute:volume_name+' => '~~',
	'Class:lnkServerToVolume/Attribute:server_id' => 'Server~~',
	'Class:lnkServerToVolume/Attribute:server_id+' => '~~',
	'Class:lnkServerToVolume/Attribute:server_name' => 'Nome del Server~~',
	'Class:lnkServerToVolume/Attribute:server_name+' => '~~',
	'Class:lnkServerToVolume/Attribute:size_used' => 'Dimensione utilizzata~~',
	'Class:lnkServerToVolume/Attribute:size_used+' => '~~',

));

//
// Class: lnkVirtualDeviceToVolume
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:lnkVirtualDeviceToVolume' => 'Collegamento Dispositivo Virtuale / Volume~~',
	'Class:lnkVirtualDeviceToVolume+' => '~~',
	'Class:lnkVirtualDeviceToVolume/Name' => '%1$s / %2$s~~',
	'Class:lnkVirtualDeviceToVolume/Attribute:volume_id' => 'Volume~~',
	'Class:lnkVirtualDeviceToVolume/Attribute:volume_id+' => '~~',
	'Class:lnkVirtualDeviceToVolume/Attribute:volume_name' => 'Nome del Volume~~',
	'Class:lnkVirtualDeviceToVolume/Attribute:volume_name+' => '~~',
	'Class:lnkVirtualDeviceToVolume/Attribute:virtualdevice_id' => 'Dispositivo Virtuale~~',
	'Class:lnkVirtualDeviceToVolume/Attribute:virtualdevice_id+' => '~~',
	'Class:lnkVirtualDeviceToVolume/Attribute:virtualdevice_name' => 'Nome del Dispositivo Virtuale~~',
	'Class:lnkVirtualDeviceToVolume/Attribute:virtualdevice_name+' => '~~',
	'Class:lnkVirtualDeviceToVolume/Attribute:size_used' => 'Dimensione utilizzata~~',
	'Class:lnkVirtualDeviceToVolume/Attribute:size_used+' => '~~',

));

//
// Class: lnkSanToDatacenterDevice
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:lnkSanToDatacenterDevice' => 'Collegamento SAN / Dispositivo Datacenter~~',
	'Class:lnkSanToDatacenterDevice+' => '~~',
	'Class:lnkSanToDatacenterDevice/Name' => '%1$s / %2$s~~',
	'Class:lnkSanToDatacenterDevice/Attribute:san_id' => 'SAN Switch~~',
	'Class:lnkSanToDatacenterDevice/Attribute:san_id+' => '~~',
	'Class:lnkSanToDatacenterDevice/Attribute:san_name' => 'Nome SAN Switch~~',
	'Class:lnkSanToDatacenterDevice/Attribute:san_name+' => '~~',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_id' => 'Dispositivo~~',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_id+' => '~~',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_name' => 'Nome del Dispositivo~~',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_name+' => '~~',
	'Class:lnkSanToDatacenterDevice/Attribute:san_port' => 'Porta SAN FC~~',
	'Class:lnkSanToDatacenterDevice/Attribute:san_port+' => '~~',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_port' => 'Porta Dispositivo FC~~',
	'Class:lnkSanToDatacenterDevice/Attribute:datacenterdevice_port+' => '~~',

));

//
// Class: Tape
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Tape' => 'Nastro~~',
	'Class:Tape+' => '~~',
	'Class:Tape/Attribute:name' => 'Nome~~',
	'Class:Tape/Attribute:name+' => '~~',
	'Class:Tape/Attribute:description' => 'Descrizione~~',
	'Class:Tape/Attribute:description+' => '~~',
	'Class:Tape/Attribute:size' => 'Dimensione~~',
	'Class:Tape/Attribute:size+' => '~~',
	'Class:Tape/Attribute:tapelibrary_id' => 'Libreria di nastri~~',
	'Class:Tape/Attribute:tapelibrary_id+' => '~~',
	'Class:Tape/Attribute:tapelibrary_name' => 'Nome della libreria di nastri~~',
	'Class:Tape/Attribute:tapelibrary_name+' => '~~',

));

//
// Class: NASFileSystem
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:NASFileSystem' => 'File System NAS~~',
	'Class:NASFileSystem+' => '~~',
	'Class:NASFileSystem/Attribute:name' => 'Nome~~',
	'Class:NASFileSystem/Attribute:name+' => '~~',
	'Class:NASFileSystem/Attribute:description' => 'Descrizione~~',
	'Class:NASFileSystem/Attribute:description+' => '~~',
	'Class:NASFileSystem/Attribute:raid_level' => 'Livello RAID~~',
	'Class:NASFileSystem/Attribute:raid_level+' => '~~',
	'Class:NASFileSystem/Attribute:size' => 'Dimensione~~',
	'Class:NASFileSystem/Attribute:size+' => '~~',
	'Class:NASFileSystem/Attribute:nas_id' => 'NAS~~',
	'Class:NASFileSystem/Attribute:nas_id+' => '~~',
	'Class:NASFileSystem/Attribute:nas_name' => 'Nome del NAS~~',
	'Class:NASFileSystem/Attribute:nas_name+' => '~~',

));

//
// Class: Software
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Software' => 'Software',
	'Class:Software+' => '',
	'Class:Software/ComplementaryName' => '%1$s - %2$s~~',
	'Class:Software/Attribute:name' => 'Nome',
	'Class:Software/Attribute:name+' => '',
	'Class:Software/Attribute:vendor' => 'Fornitore~~',
	'Class:Software/Attribute:vendor+' => '~~',
	'Class:Software/Attribute:version' => 'Versione~~',
	'Class:Software/Attribute:version+' => '~~',
	'Class:Software/Attribute:documents_list' => 'Documenti~~',
	'Class:Software/Attribute:documents_list+' => 'Tutti i documenti collegati a questo software~~',
	'Class:Software/Attribute:type' => 'Tipo~~',
	'Class:Software/Attribute:type+' => '~~',
	'Class:Software/Attribute:type/Value:DBServer' => 'DB Server~~',
	'Class:Software/Attribute:type/Value:DBServer+' => 'DB Server~~',
	'Class:Software/Attribute:type/Value:Middleware' => 'Middleware~~',
	'Class:Software/Attribute:type/Value:Middleware+' => 'Middleware~~',
	'Class:Software/Attribute:type/Value:OtherSoftware' => 'Altro Software~~',
	'Class:Software/Attribute:type/Value:OtherSoftware+' => 'Altro Software~~',
	'Class:Software/Attribute:type/Value:PCSoftware' => 'Software per PC~~',
	'Class:Software/Attribute:type/Value:PCSoftware+' => 'Software per PC~~',
	'Class:Software/Attribute:type/Value:WebServer' => 'Server Web~~',
	'Class:Software/Attribute:type/Value:WebServer+' => 'Server Web~~',
	'Class:Software/Attribute:softwareinstance_list' => 'Istanze Software~~',
	'Class:Software/Attribute:softwareinstance_list+' => 'Tutte le istanze software per questo software~~',
	'Class:Software/Attribute:softwarepatch_list' => 'Patch Software~~',
	'Class:Software/Attribute:softwarepatch_list+' => 'Tutte le patch per questo software~~',
	'Class:Software/Attribute:softwarelicence_list' => 'Licenze Software~~',
	'Class:Software/Attribute:softwarelicence_list+' => 'Tutte le licenze per questo software~~',

));

//
// Class: Patch
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Patch' => 'Patch',
	'Class:Patch+' => '',
	'Class:Patch/Attribute:name' => 'Nome',
	'Class:Patch/Attribute:name+' => '',
	'Class:Patch/Attribute:documents_list' => 'Documenti~~',
	'Class:Patch/Attribute:documents_list+' => 'Tutti i documenti collegati a questa patch~~',
	'Class:Patch/Attribute:description' => 'Descrizione',
	'Class:Patch/Attribute:description+' => '',
	'Class:Patch/Attribute:finalclass' => 'Tipo~~',
	'Class:Patch/Attribute:finalclass+' => 'Nome della classe finale~~',

));

//
// Class: OSPatch
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:OSPatch' => 'Patch del Sistema Operativo~~',
	'Class:OSPatch+' => '~~',
	'Class:OSPatch/Attribute:functionalcis_list' => 'Dispositivi~~',
	'Class:OSPatch/Attribute:functionalcis_list+' => 'Tutti i sistemi in cui questa patch è installata~~',
	'Class:OSPatch/Attribute:osversion_id' => 'Versione del Sistema Operativo~~',
	'Class:OSPatch/Attribute:osversion_id+' => '~~',
	'Class:OSPatch/Attribute:osversion_name' => 'Nome della Versione del Sistema Operativo~~',
	'Class:OSPatch/Attribute:osversion_name+' => '~~',

));

//
// Class: SoftwarePatch
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:SoftwarePatch' => 'Patch del Software~~',
	'Class:SoftwarePatch+' => '~~',
	'Class:SoftwarePatch/Attribute:software_id' => 'Software~~',
	'Class:SoftwarePatch/Attribute:software_id+' => '~~',
	'Class:SoftwarePatch/Attribute:software_name' => 'Nome del Software~~',
	'Class:SoftwarePatch/Attribute:software_name+' => '~~',
	'Class:SoftwarePatch/Attribute:softwareinstances_list' => 'Istanze del Software~~',
	'Class:SoftwarePatch/Attribute:softwareinstances_list+' => 'Tutti i sistemi in cui questa patch del software è installata~~',

));

//
// Class: Licence
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Licence' => 'Licenza',
	'Class:Licence+' => '',
	'Class:Licence/Attribute:name' => 'Nome',
	'Class:Licence/Attribute:name+' => '',
	'Class:Licence/Attribute:documents_list' => 'Documenti collegati~~',
	'Class:Licence/Attribute:documents_list+' => 'Tutti i documenti collegati a questa licenza~~',
	'Class:Licence/Attribute:org_id' => 'Proprietario',
	'Class:Licence/Attribute:org_id+' => '',
	'Class:Licence/Attribute:organization_name' => 'Nome dell\'organizzazione~~',
	'Class:Licence/Attribute:organization_name+' => 'Nome comune~~',
	'Class:Licence/Attribute:usage_limit' => 'Limiti d\'uso',
	'Class:Licence/Attribute:usage_limit+' => '',
	'Class:Licence/Attribute:description' => 'Descrizione~~',
	'Class:Licence/Attribute:description+' => '~~',
	'Class:Licence/Attribute:start_date' => 'Data di inizio~~',
	'Class:Licence/Attribute:start_date+' => '~~',
	'Class:Licence/Attribute:end_date' => 'Data di scadenza~~',
	'Class:Licence/Attribute:end_date+' => '~~',
	'Class:Licence/Attribute:licence_key' => 'Chiave',
	'Class:Licence/Attribute:licence_key+' => '',
	'Class:Licence/Attribute:perpetual' => 'Perpetua~~',
	'Class:Licence/Attribute:perpetual+' => '~~',
	'Class:Licence/Attribute:perpetual/Value:no' => 'no~~',
	'Class:Licence/Attribute:perpetual/Value:no+' => 'no~~',
	'Class:Licence/Attribute:perpetual/Value:yes' => 'sì~~',
	'Class:Licence/Attribute:perpetual/Value:yes+' => 'sì~~',
	'Class:Licence/Attribute:finalclass' => 'Tipo~~',
	'Class:Licence/Attribute:finalclass+' => 'Nome della classe finale~~',

));

//
// Class: OSLicence
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:OSLicence' => 'Licenza OS~~',
	'Class:OSLicence+' => '~~',
	'Class:OSLicence/ComplementaryName' => '%1$s - %2$s~~',
	'Class:OSLicence/Attribute:osversion_id' => 'Versione del sistema operativo~~',
	'Class:OSLicence/Attribute:osversion_id+' => '~~',
	'Class:OSLicence/Attribute:osversion_name' => 'Nome della versione del sistema operativo~~',
	'Class:OSLicence/Attribute:osversion_name+' => '~~',
	'Class:OSLicence/Attribute:virtualmachines_list' => 'Macchine virtuali~~',
	'Class:OSLicence/Attribute:virtualmachines_list+' => 'Tutte le macchine virtuali in cui questa licenza è utilizzata~~',
	'Class:OSLicence/Attribute:servers_list' => 'Server~~',
	'Class:OSLicence/Attribute:servers_list+' => 'Tutti i server in cui questa licenza è utilizzata~~',

));

//
// Class: SoftwareLicence
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:SoftwareLicence' => 'Licenza software~~',
	'Class:SoftwareLicence+' => '~~',
	'Class:SoftwareLicence/ComplementaryName' => '%1$s - %2$s~~',
	'Class:SoftwareLicence/Attribute:software_id' => 'Software~~',
	'Class:SoftwareLicence/Attribute:software_id+' => '~~',
	'Class:SoftwareLicence/Attribute:software_name' => 'Nome software~~',
	'Class:SoftwareLicence/Attribute:software_name+' => '~~',
	'Class:SoftwareLicence/Attribute:softwareinstance_list' => 'Istanze software~~',
	'Class:SoftwareLicence/Attribute:softwareinstance_list+' => 'Tutti i sistemi in cui questa licenza è utilizzata~~',

));

//
// Class: lnkDocumentToLicence
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:lnkDocumentToLicence' => 'Link Documento/Licenza~~',
	'Class:lnkDocumentToLicence+' => '~~',
	'Class:lnkDocumentToLicence/Name' => '%1$s / %2$s~~',
	'Class:lnkDocumentToLicence/Attribute:licence_id' => 'Licenza~~',
	'Class:lnkDocumentToLicence/Attribute:licence_id+' => '~~',
	'Class:lnkDocumentToLicence/Attribute:licence_name' => 'Nome licenza~~',
	'Class:lnkDocumentToLicence/Attribute:licence_name+' => '~~',
	'Class:lnkDocumentToLicence/Attribute:document_id' => 'Documento~~',
	'Class:lnkDocumentToLicence/Attribute:document_id+' => '~~',
	'Class:lnkDocumentToLicence/Attribute:document_name' => 'Nome documento~~',
	'Class:lnkDocumentToLicence/Attribute:document_name+' => '~~',

));

//
// Class: OSVersion
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:OSVersion' => 'Versione del Sistema Operativo~~',
	'Class:OSVersion+' => '~~',
	'Class:OSVersion/Attribute:osfamily_id' => 'Famiglia del Sistema Operativo~~',
	'Class:OSVersion/Attribute:osfamily_id+' => '~~',
	'Class:OSVersion/Attribute:osfamily_name' => 'Nome della Famiglia del Sistema Operativo~~',
	'Class:OSVersion/Attribute:osfamily_name+' => '~~',

));

//
// Class: OSFamily
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:OSFamily' => 'Famiglia del Sistema Operativo~~',
	'Class:OSFamily+' => '~~',

));

//
// Class: Brand
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Brand' => 'Marca~~',
	'Class:Brand+' => '~~',
	'Class:Brand/Attribute:physicaldevices_list' => 'Dispositivi Fisici~~',
	'Class:Brand/Attribute:physicaldevices_list+' => 'Tutti i dispositivi fisici corrispondenti a questa marca~~',
	'Class:Brand/UniquenessRule:name+' => 'Il nome deve essere univoco~~',
	'Class:Brand/UniquenessRule:name' => 'Questa marca esiste già~~',

));

//
// Class: Model
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Model' => 'Modello~~',
	'Class:Model+' => '~~',
	'Class:Model/ComplementaryName' => '%1$s - %2$s~~',
	'Class:Model/Attribute:brand_id' => 'Marca~~',
	'Class:Model/Attribute:brand_id+' => '~~',
	'Class:Model/Attribute:brand_name' => 'Nome della marca~~',
	'Class:Model/Attribute:brand_name+' => '~~',
	'Class:Model/Attribute:type' => 'Tipo di dispositivo~~',
	'Class:Model/Attribute:type+' => '~~',
	'Class:Model/Attribute:type/Value:PowerSource' => 'Sorgente di alimentazione~~',
	'Class:Model/Attribute:type/Value:PowerSource+' => 'Sorgente di alimentazione~~',
	'Class:Model/Attribute:type/Value:DiskArray' => 'Disk Array~~',
	'Class:Model/Attribute:type/Value:DiskArray+' => 'Disk Array~~',
	'Class:Model/Attribute:type/Value:Enclosure' => 'Contenitore~~',
	'Class:Model/Attribute:type/Value:Enclosure+' => 'Contenitore~~',
	'Class:Model/Attribute:type/Value:IPPhone' => 'Telefono IP~~',
	'Class:Model/Attribute:type/Value:IPPhone+' => 'Telefono IP~~',
	'Class:Model/Attribute:type/Value:MobilePhone' => 'Telefono mobile~~',
	'Class:Model/Attribute:type/Value:MobilePhone+' => 'Telefono mobile~~',
	'Class:Model/Attribute:type/Value:NAS' => 'NAS~~',
	'Class:Model/Attribute/type/Value:NAS+' => 'NAS~~',
	'Class:Model/Attribute/type/Value:NetworkDevice' => 'Dispositivo di rete~~',
	'Class:Model/Attribute/type/Value:NetworkDevice+' => 'Dispositivo di rete~~',
	'Class:Model/Attribute/type/Value:PC' => 'PC~~',
	'Class:Model/Attribute/type/Value:PC+' => 'PC~~',
	'Class:Model/Attribute/type/Value:PDU' => 'PDU~~',
	'Class:Model/Attribute/type/Value:PDU+' => 'PDU~~',
	'Class:Model/Attribute/type/Value:Peripheral' => 'Periferico~~',
	'Class:Model/Attribute/type/Value:Peripheral+' => 'Periferico~~',
	'Class:Model/Attribute/type/Value:Printer' => 'Stampante~~',
	'Class:Model/Attribute/type/Value:Printer+' => 'Stampante~~',
	'Class:Model/Attribute/type/Value:Rack' => 'Rack~~',
	'Class:Model/Attribute/type/Value:Rack+' => 'Rack~~',
	'Class:Model/Attribute/type/Value:SANSwitch' => 'SAN switch~~',
	'Class:Model/Attribute/type/Value:SANSwitch+' => 'SAN switch~~',
	'Class:Model/Attribute/type/Value:Server' => 'Server~~',
	'Class:Model/Attribute/type/Value:Server+' => 'Server~~',
	'Class:Model/Attribute/type/Value:StorageSystem' => 'Storage System~~',
	'Class:Model/Attribute/type/Value:StorageSystem+' => 'Storage System~~',
	'Class:Model/Attribute/type/Value:Tablet' => 'Tablet~~',
	'Class:Model/Attribute/type/Value:Tablet+' => 'Tablet~~',
	'Class:Model/Attribute/type/Value:TapeLibrary' => 'Tape Library~~',
	'Class:Model/Attribute/type/Value:TapeLibrary+' => 'Tape Library~~',
	'Class:Model/Attribute/type/Value:Phone' => 'Telefono~~',
	'Class:Model/Attribute/type/Value:Phone+' => 'Telefono~~',
	'Class:Model/Attribute:physicaldevices_list' => 'Dispositivi fisici~~',
	'Class:Model/Attribute:physicaldevices_list+' => 'Tutti i dispositivi fisici corrispondenti a questo modello~~',
	'Class:Model/UniquenessRule:name_brand+' => 'Il nome deve essere univoco nella marca~~',
	'Class:Model/UniquenessRule:name_brand' => 'Questo modello esiste già per questa marca~~',

));

//
// Class: NetworkDeviceType
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:NetworkDeviceType' => 'Tipo di Dispositivo di Rete~~',
	'Class:NetworkDeviceType+' => '~~',
	'Class:NetworkDeviceType/Attribute:networkdevicesdevices_list' => 'Dispositivi di Rete~~',
	'Class:NetworkDeviceType/Attribute:networkdevicesdevices_list+' => 'Tutti i dispositivi di rete corrispondenti a questo tipo~~',

));

//
// Class: IOSVersion
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:IOSVersion' => 'Versione IOS~~',
	'Class:IOSVersion+' => '~~',
	'Class:IOSVersion/Attribute:brand_id' => 'Marca~~',
	'Class:IOSVersion/Attribute:brand_id+' => '~~',
	'Class:IOSVersion/Attribute:brand_name' => 'Nome della Marca~~',
	'Class:IOSVersion/Attribute:brand_name+' => '~~',

));

//
// Class: lnkDocumentToPatch
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:lnkDocumentToPatch' => 'Collegamento Documento / Patch~~',
	'Class:lnkDocumentToPatch+' => '~~',
	'Class:lnkDocumentToPatch/Name' => '%1$s / %2$s~~',
	'Class:lnkDocumentToPatch/Attribute:patch_id' => 'Patch~~',
	'Class:lnkDocumentToPatch/Attribute:patch_id+' => '~~',
	'Class:lnkDocumentToPatch/Attribute:patch_name' => 'Nome della Patch~~',
	'Class:lnkDocumentToPatch/Attribute:patch_name+' => '~~',
	'Class:lnkDocumentToPatch/Attribute:document_id' => 'Documento~~',
	'Class:lnkDocumentToPatch/Attribute:document_id+' => '~~',
	'Class:lnkDocumentToPatch/Attribute:document_name' => 'Nome del Documento~~',
	'Class:lnkDocumentToPatch/Attribute:document_name+' => '~~',

));

//
// Class: lnkSoftwareInstanceToSoftwarePatch
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:lnkSoftwareInstanceToSoftwarePatch' => 'Collegamento Istanzia Software / Patch Software~~',
	'Class:lnkSoftwareInstanceToSoftwarePatch+' => '~~',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Name' => '%1$s / %2$s~~',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwarepatch_id' => 'Patch Software~~',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwarepatch_id+' => '~~',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwarepatch_name' => 'Nome della Patch Software~~',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwarepatch_name+' => '~~',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwareinstance_id' => 'Istanza Software~~',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwareinstance_id+' => '~~',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwareinstance_name' => 'Nome dell\'Istanza Software~~',
	'Class:lnkSoftwareInstanceToSoftwarePatch/Attribute:softwareinstance_name+' => '~~',

));

//
// Class: lnkFunctionalCIToOSPatch
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:lnkFunctionalCIToOSPatch' => 'Collegamento CI Funzionale / Patch OS~~',
	'Class:lnkFunctionalCIToOSPatch+' => '~~',
	'Class:lnkFunctionalCIToOSPatch/Name' => '%1$s / %2$s~~',
	'Class:lnkFunctionalCIToOSPatch/Attribute:ospatch_id' => 'Patch OS~~',
	'Class:lnkFunctionalCIToOSPatch/Attribute:ospatch_id+' => '~~',
	'Class:lnkFunctionalCIToOSPatch/Attribute:ospatch_name' => 'Nome della Patch OS~~',
	'Class:lnkFunctionalCIToOSPatch/Attribute:ospatch_name+' => '~~',
	'Class:lnkFunctionalCIToOSPatch/Attribute:functionalci_id' => 'CI Funzionale~~',
	'Class:lnkFunctionalCIToOSPatch/Attribute:functionalci_id+' => '~~',
	'Class:lnkFunctionalCIToOSPatch/Attribute:functionalci_name' => 'Nome del CI Funzionale~~',
	'Class:lnkFunctionalCIToOSPatch/Attribute:functionalci_name+' => '~~',

));

//
// Class: lnkDocumentToSoftware
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:lnkDocumentToSoftware' => 'Collegamento Documento / Software~~',
	'Class:lnkDocumentToSoftware+' => '~~',
	'Class:lnkDocumentToSoftware/Name' => '%1$s / %2$s~~',
	'Class:lnkDocumentToSoftware/Attribute:software_id' => 'Software~~',
	'Class:lnkDocumentToSoftware/Attribute:software_id+' => '~~',
	'Class:lnkDocumentToSoftware/Attribute:software_name' => 'Nome del Software~~',
	'Class:lnkDocumentToSoftware/Attribute:software_name+' => '~~',
	'Class:lnkDocumentToSoftware/Attribute:document_id' => 'Documento~~',
	'Class:lnkDocumentToSoftware/Attribute:document_id+' => '~~',
	'Class:lnkDocumentToSoftware/Attribute:document_name' => 'Nome del Documento~~',
	'Class:lnkDocumentToSoftware/Attribute:document_name+' => '~~',

));

//
// Class: Subnet
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Subnet' => 'Subnet',
    'Class:Subnet+' => '',
    'Class:Subnet/Name' => '%1$s/%2$s~~',
    'Class:Subnet/ComplementaryName' => '%1$s - %2$s~~',
    'Class:Subnet/Attribute:description' => 'Descrizione',
    'Class:Subnet/Attribute:description+' => '',
    'Class:Subnet/Attribute:subnet_name' => 'Nome Subnet~~',
    'Class:Subnet/Attribute:subnet_name+' => '~~',
    'Class:Subnet/Attribute:org_id' => 'Organizzazione proprietaria',
    'Class:Subnet/Attribute:org_id+' => '',
    'Class:Subnet/Attribute:org_name' => 'Nome organizzazione~~',
    'Class:Subnet/Attribute:org_name+' => 'Nome comune~~',
    'Class:Subnet/Attribute:ip' => 'IP',
    'Class:Subnet/Attribute:ip+' => '',
    'Class:Subnet/Attribute:ip_mask' => 'Maschera IP',
    'Class:Subnet/Attribute:ip_mask+' => '',
    'Class:Subnet/Attribute:vlans_list' => 'VLANs~~',
    'Class:Subnet/Attribute:vlans_list+' => '~~',
));

//
// Class: VLAN
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
    'Class:VLAN' => 'VLAN~~',
    'Class:VLAN+' => '~~',
    'Class:VLAN/Attribute:vlan_tag' => 'VLAN Tag~~',
    'Class:VLAN/Attribute:vlan_tag+' => '~~',
    'Class:VLAN/Attribute:description' => 'Descrizione~~',
    'Class:VLAN/Attribute:description+' => '~~',
    'Class:VLAN/Attribute:org_id' => 'Organizzazione~~',
    'Class:VLAN/Attribute:org_id+' => '~~',
    'Class:VLAN/Attribute:org_name' => 'Nome organizzazione~~',
    'Class:VLAN/Attribute:org_name+' => 'Nome comune~~',
    'Class:VLAN/Attribute:subnets_list' => 'Subnet~~',
    'Class:VLAN/Attribute:subnets_list+' => '~~',
    'Class:VLAN/Attribute:physicalinterfaces_list' => 'Interfacce di rete fisiche~~',
    'Class:VLAN/Attribute:physicalinterfaces_list+' => '~~',
));

//
// Class: lnkSubnetToVLAN
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
    'Class:lnkSubnetToVLAN' => 'Link Subnet / VLAN~~',
    'Class:lnkSubnetToVLAN+' => '~~',
    'Class:lnkSubnetToVLAN/Name' => '%1$s / %2$s~~',
    'Class:lnkSubnetToVLAN/Attribute:subnet_id' => 'Subnet~~',
    'Class:lnkSubnetToVLAN/Attribute:subnet_id+' => '~~',
    'Class:lnkSubnetToVLAN/Attribute:subnet_ip' => 'Subnet IP~~',
    'Class:lnkSubnetToVLAN/Attribute:subnet_ip+' => '~~',
    'Class:lnkSubnetToVLAN/Attribute:subnet_name' => 'Nome Subnet~~',
    'Class:lnkSubnetToVLAN/Attribute:subnet_name+' => '~~',
    'Class:lnkSubnetToVLAN/Attribute:vlan_id' => 'VLAN~~',
    'Class:lnkSubnetToVLAN/Attribute:vlan_id+' => '~~',
    'Class:lnkSubnetToVLAN/Attribute:vlan_tag' => 'VLAN Tag~~',
    'Class:lnkSubnetToVLAN/Attribute:vlan_tag+' => '~~',
));

//
// Class: NetworkInterface
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
    'Class:NetworkInterface' => 'Interfaccia di Rete',
    'Class:NetworkInterface+' => '',
    'Class:NetworkInterface/Attribute:name' => 'Nome~~',
    'Class:NetworkInterface/Attribute:name+' => '~~',
    'Class:NetworkInterface/Attribute:finalclass' => 'Tipo~~',
    'Class:NetworkInterface/Attribute:finalclass+' => 'Nome della classe finale~~',
));

//
// Class: IPInterface
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:IPInterface' => 'Interfaccia IP~~',
	'Class:IPInterface+' => '~~',
	'Class:IPInterface/Attribute:ipaddress' => 'Indirizzo IP~~',
	'Class:IPInterface/Attribute:ipaddress+' => '~~',
	'Class:IPInterface/Attribute:macaddress' => 'Indirizzo MAC~~',
	'Class:IPInterface/Attribute:macaddress+' => '~~',
	'Class:IPInterface/Attribute:comment' => 'Commento~~',
	'Class:IPInterface/Attribute:coment+' => '~~',
	'Class:IPInterface/Attribute:ipgateway' => 'Gateway IP~~',
	'Class:IPInterface/Attribute:ipgateway+' => '~~',
	'Class:IPInterface/Attribute:ipmask' => 'Maschera IP~~',
	'Class:IPInterface/Attribute:ipmask+' => '~~',
	'Class:IPInterface/Attribute:speed' => 'Velocità~~',
	'Class:IPInterface/Attribute:speed+' => '~~',

));

//
// Class: PhysicalInterface
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:PhysicalInterface' => 'Interfaccia Fisica~~',
	'Class:PhysicalInterface+' => '~~',
	'Class:PhysicalInterface/Name' => '%2$s %1$s~~',
	'Class:PhysicalInterface/Attribute:connectableci_id' => 'Dispositivo~~',
	'Class:PhysicalInterface/Attribute:connectableci_id+' => '~~',
	'Class:PhysicalInterface/Attribute:connectableci_name' => 'Nome del dispositivo~~',
	'Class:PhysicalInterface/Attribute:connectableci_name+' => '~~',
	'Class:PhysicalInterface/Attribute:vlans_list' => 'VLAN~~',
	'Class:PhysicalInterface/Attribute:vlans_list+' => '~~',

));

//
// Class: lnkPhysicalInterfaceToVLAN
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:lnkPhysicalInterfaceToVLAN' => 'Collegamento Interfaccia Fisica / VLAN~~',
	'Class:lnkPhysicalInterfaceToVLAN+' => '~~',
	'Class:lnkPhysicalInterfaceToVLAN/Name' => '%1$s %2$s / %3$s~~',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:physicalinterface_id' => 'Interfaccia Fisica~~',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:physicalinterface_id+' => '~~',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:physicalinterface_name' => 'Nome Interfaccia Fisica~~',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:physicalinterface_name+' => '~~',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:physicalinterface_device_id' => 'Dispositivo~~',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:physicalinterface_device_id+' => '~~',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:physicalinterface_device_name' => 'Nome del Dispositivo~~',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:physicalinterface_device_name+' => '~~',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:vlan_id' => 'VLAN~~',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:vlan_id+' => '~~',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:vlan_tag' => 'Tag VLAN~~',
	'Class:lnkPhysicalInterfaceToVLAN/Attribute:vlan_tag+' => '~~',

));


//
// Class: LogicalInterface
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:LogicalInterface' => 'Interfaccia Logica~~',
	'Class:LogicalInterface+' => '~~',
	'Class:LogicalInterface/Attribute:virtualmachine_id' => 'Macchina Virtuale~~',
	'Class:LogicalInterface/Attribute:virtualmachine_id+' => '~~',
	'Class:LogicalInterface/Attribute:virtualmachine_name' => 'Nome Macchina Virtuale~~',
	'Class:LogicalInterface/Attribute:virtualmachine_name+' => '~~',

));

//
// Class: FiberChannelInterface
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:FiberChannelInterface' => 'Interfaccia Fibre Channel~~',
	'Class:FiberChannelInterface+' => '~~',
	'Class:FiberChannelInterface/Attribute:speed' => 'Velocità~~',
	'Class:FiberChannelInterface/Attribute:speed+' => '~~',
	'Class:FiberChannelInterface/Attribute:topology' => 'Topologia~~',
	'Class:FiberChannelInterface/Attribute:topology+' => '~~',
	'Class:FiberChannelInterface/Attribute:wwn' => 'WWN~~',
	'Class:FiberChannelInterface/Attribute:wwn+' => '~~',
	'Class:FiberChannelInterface/Attribute:datacenterdevice_id' => 'Dispositivo~~',
	'Class:FiberChannelInterface/Attribute:datacenterdevice_id+' => '~~',
	'Class:FiberChannelInterface/Attribute:datacenterdevice_name' => 'Nome Dispositivo~~',
	'Class:FiberChannelInterface/Attribute:datacenterdevice_name+' => '~~',

));

//
// Class: lnkConnectableCIToNetworkDevice
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:lnkConnectableCIToNetworkDevice' => 'Collega CI collegabile / Dispositivo di rete~~',
	'Class:lnkConnectableCIToNetworkDevice+' => '~~',
	'Class:lnkConnectableCIToNetworkDevice/Name' => '%1$s / %2$s~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:networkdevice_id' => 'Dispositivo di rete~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:networkdevice_id+' => '~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:networkdevice_name' => 'Nome del dispositivo di rete~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:networkdevice_name+' => '~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connectableci_id' => 'Dispositivo collegato~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connectableci_id+' => '~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connectableci_name' => 'Nome del dispositivo collegato~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connectableci_name+' => '~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:network_port' => 'Porta di rete~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:network_port+' => '~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:device_port' => 'Porta del dispositivo~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:device_port+' => '~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type' => 'Tipo di connessione~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type+' => '~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type/Value:downlink' => 'Collegamento verso il basso~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type/Value:downlink+' => 'Collegamento verso il basso~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type/Value:uplink' => 'Collegamento verso l\'alto~~',
	'Class:lnkConnectableCIToNetworkDevice/Attribute:connection_type/Value:uplink+' => 'Collegamento verso l\'alto~~',

));

//
// Class: lnkApplicationSolutionToFunctionalCI
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:lnkApplicationSolutionToFunctionalCI' => 'Collega Soluzione Applicativa / CI Funzionale~~',
	'Class:lnkApplicationSolutionToFunctionalCI+' => '~~',
	'Class:lnkApplicationSolutionToFunctionalCI/Name' => '%1$s / %2$s~~',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_id' => 'Soluzione Applicativa~~',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_id+' => '~~',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_name' => 'Nome Soluzione Applicativa~~',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:applicationsolution_name+' => '~~',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_id' => 'CI Funzionale~~',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_id+' => '~~',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_name' => 'Nome CI Funzionale~~',
	'Class:lnkApplicationSolutionToFunctionalCI/Attribute:functionalci_name+' => '~~',

));

//
// Class: lnkApplicationSolutionToBusinessProcess
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:lnkApplicationSolutionToBusinessProcess' => 'Collega Soluzione Applicativa / Processo Aziendale~~',
	'Class:lnkApplicationSolutionToBusinessProcess+' => '~~',
	'Class:lnkApplicationSolutionToBusinessProcess/Name' => '%1$s / %2$s~~',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_id' => 'Processo Aziendale~~',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_id+' => '~~',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_name' => 'Nome Processo Aziendale~~',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:businessprocess_name+' => '~~',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_id' => 'Soluzione Applicativa~~',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_id+' => '~~',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_name' => 'Nome Soluzione Applicativa~~',
	'Class:lnkApplicationSolutionToBusinessProcess/Attribute:applicationsolution_name+' => '~~',

));

//
// Class: Group
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Group' => 'Gruppo',
	'Class:Group+' => '',
	'Class:Group/ComplementaryName' => '%1$s - %2$s~~',
	'Class:Group/Attribute:name' => 'Nome',
	'Class:Group/Attribute:name+' => '',
	'Class:Group/Attribute:status' => 'Stato',
	'Class:Group/Attribute:status+' => '',
	'Class:Group/Attribute:status/Value:implementation' => 'Implementazione',
	'Class:Group/Attribute:status/Value:implementation+' => 'Implementazione',
	'Class:Group/Attribute:status/Value:obsolete' => 'Obsoleto',
	'Class:Group/Attribute:status/Value:obsolete+' => 'Obsoleto',
	'Class:Group/Attribute:status/Value:production' => 'Produzione',
	'Class:Group/Attribute:status/Value:production+' => 'Produzione',
	'Class:Group/Attribute:org_id' => 'Organizzazione',
	'Class:Group/Attribute:org_id+' => '',
	'Class:Group/Attribute:owner_name' => 'Nome del Proprietario',
	'Class:Group/Attribute:owner_name+' => 'Cognome del Proprietario',
	'Class:Group/Attribute:description' => 'Descrizione',
	'Class:Group/Attribute:description+' => '',
	'Class:Group/Attribute:type' => 'Tipo',
	'Class:Group/Attribute:type+' => '',
	'Class:Group/Attribute:parent_id' => 'Gruppo Padre',
	'Class:Group/Attribute:parent_id+' => '',
	'Class:Group/Attribute:parent_name' => 'Nome del Gruppo Padre',
	'Class:Group/Attribute:parent_name+' => '',
	'Class:Group/Attribute:ci_list' => 'Elementi di Configurazione Collegati',
	'Class:Group/Attribute:ci_list+' => 'Tutti gli elementi di configurazione collegati a questo gruppo~~',
	'Class:Group/Attribute:parent_id_friendlyname' => 'Nome del Gruppo Padre~~',
	'Class:Group/Attribute:parent_id_friendlyname+' => '~~',

));

//
// Class: lnkGroupToCI
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:lnkGroupToCI' => 'Gruppo / CI',
	'Class:lnkGroupToCI+' => '',
	'Class:lnkGroupToCI/Name' => '%1$s / %2$s~~',
	'Class:lnkGroupToCI/Attribute:group_id' => 'Gruppo',
	'Class:lnkGroupToCI/Attribute:group_id+' => '',
	'Class:lnkGroupToCI/Attribute:group_name' => 'Nome del Gruppo',
	'Class:lnkGroupToCI/Attribute:group_name+' => '',
	'Class:lnkGroupToCI/Attribute:ci_id' => 'CI',
	'Class:lnkGroupToCI/Attribute:ci_id+' => '',
	'Class:lnkGroupToCI/Attribute:ci_name' => 'Nome del CI',
	'Class:lnkGroupToCI/Attribute:ci_name+' => '',
	'Class:lnkGroupToCI/Attribute:reason' => 'Motivo',
	'Class:lnkGroupToCI/Attribute:reason+' => '',

));

// Add translation for Fieldsets

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Server:baseinfo' => 'Informazioni generali~~',
	'Server:Date' => 'Date~~',
	'Server:moreinfo' => 'Ulteriori informazioni~~',
	'Server:otherinfo' => 'Altre informazioni~~',
	'Server:power' => 'Alimentazione elettrica~~',
	'Class:Subnet/Tab:IPUsage' => 'Utilizzo IP',
	'Class:Subnet/Tab:IPUsage+' => 'Quali IP in questo Subnet sono utilizzati o non utilizzati~~',
	'Class:Subnet/Tab:IPUsage-explain' => 'Interfacce che hanno un IP nell\'intervallo tra <em>%1$s</em> e <em>%2$s</em>~~',
	'Class:Subnet/Tab:FreeIPs' => 'IP liberi',
	'Class:Subnet/Tab:FreeIPs-count' => 'IP liberi: %1$s~~',
	'Class:Subnet/Tab:FreeIPs-explain' => 'Ecco un estratto di 10 indirizzi IP liberi~~',
	'Class:Document:PreviewTab' => 'Anteprima',

));


//
// Class: lnkDocumentToFunctionalCI
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:lnkDocumentToFunctionalCI' => 'Collegamento Documento / FunctionalCI~~',
	'Class:lnkDocumentToFunctionalCI+' => '~~',
	'Class:lnkDocumentToFunctionalCI/Name' => '%1$s / %2$s~~',
	'Class:lnkDocumentToFunctionalCI/Attribute:functionalci_id' => 'FunctionalCI~~',
	'Class:lnkDocumentToFunctionalCI/Attribute:functionalci_id+' => '~~',
	'Class:lnkDocumentToFunctionalCI/Attribute:functionalci_name' => 'Nome FunctionalCI~~',
	'Class:lnkDocumentToFunctionalCI/Attribute:functionalci_name+' => '~~',
	'Class:lnkDocumentToFunctionalCI/Attribute:document_id' => 'Documento~~',
	'Class:lnkDocumentToFunctionalCI/Attribute:document_id+' => '~~',
	'Class:lnkDocumentToFunctionalCI/Attribute:document_name' => 'Nome documento~~',
	'Class:lnkDocumentToFunctionalCI/Attribute:document_name+' => '~~',

));

//
// Application Menu
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Menu:Application' => 'Applicazioni',
	'Menu:Application+' => 'Tutte le applicazioni',
	'Menu:DBServer' => 'Server di Database',
	'Menu:DBServer+' => 'Server di Database',
	'Menu:BusinessProcess' => 'Processi Aziendali',
	'Menu:BusinessProcess+' => 'Tutti i Processi Aziendali',
	'Menu:ApplicationSolution' => 'Soluzioni Applicative',
	'Menu:ApplicationSolution+' => 'Tutte le Soluzioni Applicative',
	'Menu:ConfigManagementSoftware' => 'Gestione del Software',
	'Menu:Licence' => 'Licenze',
	'Menu:Licence+' => 'Tutte le Licenze',
	'Menu:Patch' => 'Patch',
	'Menu:Patch+' => 'Tutte le Patch',
	'Menu:ApplicationInstance' => 'Installazioni Applicazioni',
	'Menu:ApplicationInstance+' => 'Applicazioni e Server di Database',
	'Menu:ConfigManagementHardware' => 'Gestione Hardware',
	'Menu:Subnet' => 'Subnet',
	'Menu:Subnet+' => 'Tutte le Subnet',
	'Menu:NetworkDevice' => 'Dispositivi di Rete',
	'Menu:NetworkDevice+' => 'Tutti i Dispositivi di Rete',
	'Menu:Server' => 'Server',
	'Menu:Server+' => 'Tutti i Server',
	'Menu:Printer' => 'Stampanti',
	'Menu:Printer+' => 'Tutte le Stampanti',
	'Menu:MobilePhone' => 'Telefoni Cellulari',
	'Menu:MobilePhone+' => 'Tutti i Telefoni Cellulari',
	'Menu:PC' => 'Personal Computers',
	'Menu:PC+' => 'Tutti i Personal Computers',
	'Menu:NewCI' => 'Nuovo CI',
	'Menu:NewCI+' => 'Nuovo CI',
	'Menu:SearchCIs' => 'Ricerca CI',
	'Menu:SearchCIs+' => 'Ricerca CI',
	'Menu:ConfigManagement:Devices' => 'Dispositivi',
	'Menu:ConfigManagement:AllDevices' => 'Infrastrutture',
	'Menu:ConfigManagement:virtualization' => 'Virtualizzazione~~',
	'Menu:ConfigManagement:EndUsers' => 'Dispositivi utente finale~~',
	'Menu:ConfigManagement:SWAndApps' => 'Software e Applicazioni',
	'Menu:ConfigManagement:Misc' => 'Varie',
	'Menu:Group' => 'Gruppi CI',
	'Menu:Group+' => 'Gruppi CI',
	'Menu:OSVersion' => 'Versioni OS~~',
	'Menu:OSVersion+' => '~~',
	'Menu:Software' => 'Catalogo Software~~',
	'Menu:Software+' => 'Catalogo Software~~',

));
?>
