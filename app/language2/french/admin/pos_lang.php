<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
 * Module: POS
 * Language: French
 *
 * Last edited:
 * 15th June 2017
 *
 * Package:
 * Stock Manage Advance v3.0
 *
 * You can translate this file to your language.
 * For instruction on new language setup, please visit the documentations.
 * You also can share your language files by emailing to saleem@wmeat.store
 * Thank you
 */

// For quick cash buttons -  if you need to format the currency please do it according to you system settings
$lang['quick_cash_notes'] = ['10', '20', '50', '100', '500', '1000', '5000'];

$lang['pos_module']                         = 'POS Module';
$lang['cat_limit']                          = 'Afficher les catégories';
$lang['pro_limit']                          = 'Afficher les produits';
$lang['default_category']                   = 'Catégorie par défaut';
$lang['default_customer']                   = 'Client par défaut';
$lang['default_biller']                     = 'Facturier par défaut';
$lang['pos_settings']                       = 'POS Paramètres';
$lang['barcode_scanner']                    = 'Barcode Scanner';
$lang['x']                                  = 'X';
$lang['qty']                                = 'Qty';
$lang['total_items']                        = 'Articles au total';
$lang['total_payable']                      = 'Total à payer';
$lang['total_sales']                        = 'Ventes totales';
$lang['tax1']                               = 'Tax 1';
$lang['total_x_tax']                        = 'Total';
$lang['cancel']                             = 'Annuler';
$lang['payment']                            = 'Paiement';
$lang['pos']                                = 'POS';
$lang['p_o_s']                              = 'Point de vente';
$lang['today_sale']                         = "Vente d\&#39;aujourd\&#39;hui";
$lang['daily_sales']                        = 'Ventes quotidiennes';
$lang['monthly_sales']                      = 'Ventes mensuelles';
$lang['pos_settings']                       = 'POS Paramètres';
$lang['loading']                            = 'Chargement...';
$lang['display_time']                       = "Temps d\&#39;affichage";
$lang['pos_setting_updated']                = 'POS paramètres mis à jour avec succès';
$lang['pos_setting_updated_payment_failed'] = 'POS paramètres ont été enregistrés avec succès, mais les paramètres des passerelles de paiement ont échoué. Veuillez réessayer';
$lang['tax_request_failed']                 = "La demande a échoué, Il y a un problème avec le taux d\&#39;imposition!";
$lang['pos_error']                          = "Une erreur s\&#39;est produite dans le calcul. Veuillez ajouter des produits à nouveau. Merci!";
$lang['qty_limit']                          = 'Vous avez atteint la limite de quantité 999.';
$lang['max_pro_reached']                    = 'Max autorisé atteint! Veuillez ajouter le paiement pour ceci et ouvrir la nouvelle facture pour tous les articles suivants. Merci!';
$lang['code_error']                         = 'Échec de la demande, Veuillez vérifier votre code et réessayer!';
$lang['x_total']                            = 'Veuillez ajouter le produit avant le paiement. Merci!';
$lang['paid_l_t_payable']                   = 'Le montant payé est inférieur au montant payable. Veuillez appuyer sur OK pour soumettre la vente.';
$lang['suspended_sales']                    = 'Ventes suspendues';
$lang['sale_suspended']                     = 'Vente suspendue avec succès.';
$lang['sale_suspend_failed']                = 'Suspendre la vente a échoué. Veuillez réessayer';
$lang['add_to_pos']                         = "Ajouter cette vente à l\&#39;écran pos";
$lang['delete_suspended_sale']              = 'Supprimer cette vente suspendue';
$lang['save']                               = 'Enregistrer';
$lang['discount_request_failed']            = 'La demande a échoué, Il ya un problème avec la réduction!';
$lang['saving']                             = 'Enregistrement...';
$lang['paid_by']                            = 'Payé par';
$lang['paid']                               = 'Payé';
$lang['ajax_error']                         = 'Échec de la demande, veuillez réessayer!';
$lang['close']                              = 'Fermer';
$lang['finalize_sale']                      = 'Finaliser la vente';
$lang['cash_sale']                          = 'Paiement Cash';
$lang['cc_sale']                            = 'Paiement par carte de crédit';
$lang['ch_sale']                            = 'Paiement par chèque';
$lang['sure_to_suspend_sale']               = 'Voulez-vous vraiment suspendre la vente?';
$lang['leave_alert']                        = 'Vous perdrez des données de vente. Appuyez sur OK pour quitter et sur Annuler pour rester sur cette page.';
$lang['sure_to_cancel_sale']                = 'Voulez-vous vraiment annuler la vente?';
$lang['sure_to_submit_sale']                = 'Voulez-vous vraiment soumettre la vente?';
$lang['alert_x_sale']                       = 'Voulez-vous vraiment supprimer cette vente suspendue?';
$lang['suspended_sale_deleted']             = 'Vente suspendue supprimée avec succès';
$lang['item_count_error']                   = "Une erreur s\&#39;est produite lors du comptage du total des articles. Veuillez réessayer!";
$lang['x_suspend']                          = 'Veuillez ajouter le produit avant de suspendre la vente. Merci!';
$lang['x_cancel']                           = "Il n\&#39;y a pas de produit. Merci!";
$lang['yes']                                = 'Oui';
$lang['no1']                                = 'Non';
$lang['suspend']                            = 'Suspendre';
$lang['order_list']                         = 'Liste des commandes';
$lang['print']                              = 'Imprimer';
$lang['cf_display_on_bill']                 = 'Champ personnalisé à afficher sur pos reçu.';
$lang['cf_title1']                          = 'Titre champ personnalisé 1';
$lang['cf_value1']                          = 'Valeur du champ personnalisé 1';
$lang['cf_title2']                          = 'Titre champ personnalisé 2';
$lang['cf_value2']                          = 'Valeur du champ personnalisé 2';
$lang['cash']                               = 'Cash';
$lang['cc']                                 = 'Carte de crédit';
$lang['cheque']                             = 'Chèque';
$lang['cc_no']                              = 'Num Carte de crédit';
$lang['cc_holder']                          = 'Nom du titulaire';
$lang['cheque_no']                          = 'Num chèque';
$lang['email_sent']                         = 'Email envoyé avec succès!';
$lang['email_failed']                       = 'Échec de la fonction de messagerie électronique!';
$lang['back_to_pos']                        = 'Retour à POS';
$lang['shortcuts']                          = 'Raccourcis';
$lang['shortcut_key']                       = 'Touche de raccourci';
$lang['shortcut_keys']                      = 'Touches de raccourci';
$lang['keyboard']                           = 'Clavier';
$lang['onscreen_keyboard']                  = 'On-Screen Keyboard';
$lang['focus_add_item']                     = 'Focus Ajouter article Input';
$lang['add_manual_product']                 = 'Ajouter article manuel pour vente';
$lang['customer_selection']                 = 'Client Input';
$lang['toggle_category_slider']             = 'Bascule des catégories';
$lang['toggle_subcategory_slider']          = 'Afficher / masquer les sous-catégories';
$lang['cancel_sale']                        = 'Annuler Vente';
$lang['suspend_sale']                       = 'Suspendre Vente';
$lang['print_items_list']                   = 'Imprimer la liste des articles';
$lang['finalize_sale']                      = 'Finaliser Vente';
$lang['open_hold_bills']                    = 'Ouvrir les ventes suspendues';
$lang['search_product_by_name_code']        = 'Numériser / Rechercher un produit par nom / code';
$lang['receipt_printer']                    = 'Imprimante de reçus';
$lang['cash_drawer_codes']                  = 'Ouvrir Cash Drawer Code';
$lang['pos_list_printers']                  = 'POS Liste des imprimantes (Separé par |)';
$lang['custom_fileds']                      = 'Champs personnalisés pour la réception';
$lang['shortcut_heading']                   = 'Ctrl, Shift et Alt avec toute autre lettre (Ctrl+Shift+A). Les touches de fonction (F1 - F12) sont également supportés.';
$lang['product_button_color']               = 'Couleur du bouton du produit';
$lang['edit_order_tax']                     = "Modifier l\&#39;impôt sur les commandes";
$lang['select_order_tax']                   = 'Sélectionner une taxe';
$lang['paying_by']                          = 'Payé par';
$lang['paypal_pro']                         = 'Paypal Pro';
$lang['stripe']                             = 'Stripe';
$lang['swipe']                              = 'Swipe';
$lang['card_type']                          = 'Type de carte';
$lang['Visa']                               = 'Visa';
$lang['MasterCard']                         = 'MasterCard';
$lang['Amex']                               = 'Amex';
$lang['Discover']                           = 'Découvrir';
$lang['month']                              = 'Mois';
$lang['year']                               = 'Année';
$lang['cvv2']                               = 'Code de sécurité';
$lang['total_paying']                       = 'Paiement total';
$lang['balance']                            = 'Balance';
$lang['serial_no']                          = 'Numéro de série';
$lang['product_discount']                   = 'Réduction du produit';
$lang['max_reached']                        = 'Limite maximale autorisée atteinte.';
$lang['add_more_payments']                  = 'Ajouter plus de paiements';
$lang['sell_gift_card']                     = 'Vendre une carte-cadeau';
$lang['gift_card']                          = 'Carte-cadeau';
$lang['product_option']                     = 'Option Produit';
$lang['card_no']                            = 'Numéro de carte';
$lang['value']                              = 'Valeur';
$lang['paypal']                             = 'Paypal';
$lang['sale_added']                         = 'POS Vente ajoutée avec succès';
$lang['invoice']                            = 'Facture';
$lang['vat']                                = 'VAT';
$lang['web_print']                          = 'Impression sur le Web';
$lang['ajax_request_failed']                = 'Demande Ajax échouée, réessayez';
$lang['pos_config']                         = 'POS Configuration';
$lang['default']                            = 'Défaut';
$lang['primary']                            = 'Primaire';
$lang['info']                               = 'Info';
$lang['warning']                            = 'Erreur';
$lang['danger']                             = 'Danger';
$lang['enable_java_applet']                 = 'Autoriser Java Applet';
$lang['update_settings']                    = 'Mettre à jour les paramètres';
$lang['open_register']                      = 'Ouvrir le registre';
$lang['close_register']                     = 'Fermer la fenêtre';
$lang['cash_in_hand']                       = 'Du liquide en main';
$lang['total_cash']                         = 'Total des espèces';
$lang['total_cheques']                      = 'Total Chèques';
$lang['total_cc_slips']                     = 'Total des relevés de carte de crédit';
$lang['CC']                                 = 'Carte de crédit';
$lang['register_closed']                    = 'Inscription fermée avec succès';
$lang['register_not_open']                  = "L\&#39;inscription n\&#39;est pas ouverte, S\&#39;il vous plaît entrer le montant en espèces en main et cliquez sur ouvrir l\&#39;inscription";
$lang['welcome_to_pos']                     = 'Bienvenue au POS';
$lang['tooltips']                           = "Conseils d\&#39;utilisation";
$lang['previous']                           = 'Précédent';
$lang['next']                               = 'Suivant';
$lang['payment_gateways']                   = 'Passerelles de paiement';
$lang['stripe_secret_key']                  = 'Clé secrète';
$lang['stripe_publishable_key']             = 'Clé à publier striée';
$lang['APIUsername']                        = "Nom d\&#39;utilisateur de l\&#39;API Pro de Paypal";
$lang['APIPassword']                        = 'Mot de passe Paypal Pro API';
$lang['APISignature']                       = "Signature de l\&#39;API Paypal Pro";
$lang['view_bill']                          = 'Voir factures';
$lang['view_bill_screen']                   = "Afficher l\&#39;écran du facture";
$lang['opened_bills']                       = 'Factures ouvertes';
$lang['leave_opened']                       = 'Laisser ouvert';
$lang['delete_bill']                        = 'Supprimer factures';
$lang['delete_all']                         = 'Tout supprimer';
$lang['transfer_opened_bills']              = 'Transfert de factures ouvertes';
$lang['paypal_empty_error']                 = "Échec de la transaction Paypal (tableau d\&#39;erreurs vide renvoyé)";
$lang['payment_failed']                     = '<strong>Paiement échoué!</strong>';
$lang['pending_amount']                     = 'Montant en attente';
$lang['available_amount']                   = 'Montant disponible';
$lang['stripe_balance']                     = 'Stripe Balance';
$lang['paypal_balance']                     = 'Paypal Balance';
$lang['view_receipt']                       = 'voir le reçu';
$lang['rounding']                           = 'Arrondissement';
$lang['ppp']                                = 'Paypal Pro';
$lang['delete_sale']                        = 'Supprimer la vente';
$lang['return_sale']                        = 'Vente de retour';
$lang['edit_sale']                          = 'Modifier la vente';
$lang['email_sale']                         = 'Email de vente';
$lang['add_delivery']                       = 'Ajouter une livraison';
$lang['add_payment']                        = 'AAjouter un paiement';
$lang['view_payments']                      = 'Voir les paiements';
$lang['no_meil_provided']                   = 'Aucune adresse email fournie';
$lang['payment_added']                      = 'Paiement ajouté avec succès';
$lang['suspend_sale']                       = 'Suspension de la vente';
$lang['reference_note']                     = 'Référence';
$lang['type_reference_note']                = 'Veuillez taper la note de référence et soumettre pour suspendre cette vente';
$lang['change']                             = 'Change';
$lang['quick_cash']                         = 'Quick Cash';
$lang['sales_person']                       = 'Associer les ventes';
$lang['no_opeded_bill']                     = "Aucune facture ouverte n\&#39;a été trouvée";
$lang['please_update_settings']             = "Veuillez mettre à jour les paramètres avant d\&#39;utiliser le POS";
$lang['order']                              = 'Commande';
$lang['bill']                               = 'Facture';
$lang['due']                                = 'Dû';
$lang['paid_amount']                        = 'Montant payé';
$lang['due_amount']                         = 'Montant dû';
$lang['edit_order_discount']                = 'Modifier la remise de commande';
$lang['sale_note']                          = 'Vente Note';
$lang['staff_note']                         = 'Note du personnel';
$lang['list_open_registers']                = 'Liste des registres ouverts';
$lang['open_registers']                     = 'Ouvrir des registres';
$lang['opened_at']                          = 'Ouvert à';
$lang['all_registers_are_closed']           = 'Tous les registres sont fermés';
$lang['review_opened_registers']            = 'Veuillez consulter tous les registres ouverts dans le tableau ci-dessous';
$lang['suspended_sale_loaded']              = 'Vente suspendue chargée avec succès';
$lang['incorrect_gift_card']                = 'Numéro de carte-cadeau incorrect ou expiré.';
$lang['gift_card_not_for_customer']         = "Le numéro de carte-cadeau n\&#39;est pas pour ce client.";
$lang['delete_sales']                       = 'Supprimer les ventes';
$lang['click_to_add']                       = 'Veuillez cliquer sur le bouton ci-dessous pour ouvrir';
$lang['tax_summary']                        = 'Sommaire des impôts';
$lang['qty']                                = 'Qty';
$lang['tax_excl']                           = 'Tax Excl';
$lang['tax_amt']                            = 'Tax Amt';
$lang['total_tax_amount']                   = 'Montant total de la taxe';
$lang['tax_invoice']                        = 'FACTURE FISCALE';
$lang['char_per_line']                      = 'Caractères par ligne';
$lang['delete_code']                        = 'POS Pin Code';
$lang['quantity_out_of_stock_for_%s']       = 'La quantité est épuisée pour %s';
$lang['refunds']                            = 'Remboursements';
$lang['register_details']                   = 'Inscription Détails';
$lang['payment_note']                       = 'Paiement';
$lang['to_nearest_005']                     = 'Au plus près 0.05';
$lang['to_nearest_050']                     = 'Au plus près 0.50';
$lang['to_nearest_number']                  = 'Au nombre le plus proche (entier)';
$lang['to_next_number']                     = 'Au numéro suivant (entier)';
$lang['update_heading']                     = "Cette page vous aidera à vérifier et installer les mises à jour facilement avec un seul clic. <strong>S\&#39;il y a plus de 1 mise à jour disponible, veuillez les mettre à jour une par une en commençant par le haut (version la plus basse)</strong>.";
$lang['update_successful']                  = 'Article révisé avec succès';
$lang['using_latest_update']                = 'Vous utilisez la dernière version.';
$lang['sale_details_modal']                 = 'Détails de la vente Modal';
$lang['bill_x_found']                       = "La facture suspendue n\&#39;est pas trouvée, veuillez vérifier la liste des ventes suspendues pour ouvrir une facture suspendue";
$lang['after_sale_page']                    = 'Page après vente';
$lang['receipt']                            = 'Reçu';
$lang['default']                            = 'Le reçu';
$lang['item_order']                         = "Commande d\&#39;article";
$lang['default']                            = 'Dèfaut';
$lang['api_login_id']                       = 'API Login ID';
$lang['api_transaction_key']                = 'Clé de transaction API';
$lang['toggle_brands_slider']               = 'Basculer le curseur des marques';
$lang['gc_sale']                            = 'Paiement par carte-cadeau';
$lang['sale_status']                        = 'État des ventes';
$lang['display_customer_details']           = 'Afficher les détails du client sur le reçu';
$lang['comment']                            = 'Commentaire';
$lang['open_cash_drawer']                   = 'Open Cash Drawer';
$lang['pos_printing']                       = 'Impression POS';
$lang['title']                              = 'Titre';
$lang['network']                            = 'Network';
$lang['windows']                            = 'Windows';
$lang['linux']                              = 'Linux';
$lang['default']                            = 'Défaut';
$lang['simple']                             = 'Simple';
$lang['star_branded']                       = 'Star-branded';
$lang['epson_tep']                          = 'Espon Tep';
$lang['p822d']                              = 'P822D';
$lang['path']                               = 'Path';
$lang['ip_address']                         = 'Adresse IP';
$lang['port']                               = 'Port';
$lang['printers']                           = 'Imprimantes';
$lang['edit_printer']                       = 'Modifier imprimante';
$lang['update_printer']                     = 'Mettre à jour imprimante';
$lang['delete_printer']                     = 'Supprimer imprimante';
$lang['printer_added']                      = 'Imprimante ajoutée avec succès';
$lang['printer_updated']                    = 'Imprimante mise à jour avec succès';
$lang['printer_deleted']                    = 'Imprimante supprimée avec succès';
$lang['alert_x_printer']                    = "Vous allez supprimer l\&#39;imprimante, cliquez sur OK pour supprimer.";
$lang['receipt_printer']                    = 'Imprimante de reçus';
$lang['order_printers']                     = "Commande d\&#39;imprimantes";
$lang['bill_note']                          = "Ceci est une copie d\&#39;usage de bureau, s\&#39;il vous plaît demander la réception / facture avec le numéro de vente. Merci";
$lang['extra_details']                      = 'Détails supplémentaires';
$lang['sale_no_ref']                        = 'Vente Num/Ref';
$lang['auto_print']                         = "Réception automatique d\&#39;impression";
$lang['receipt_header']                     = 'En-tête de reçu';
$lang['printing']                           = 'Impression';
$lang['local_install']                      = 'PHP Server (seulement pour LAN/localhost)';
$lang['web_browser_print']                  = 'Navigateur web';
$lang['pos_print_app']                      = 'Node POS Print Server';
$lang['php_pos_print_app']                  = 'PHP POS Print Server';
$lang['merchant_copy']                      = 'Copie du marchand';
$lang['pos_print_error']                    = 'Impossible de se connecter à la socket, assurez-vous que le serveur fonctionne correctement.';
$lang['printer_port_tip']                   = 'La plupart des imprimantes sont ouvertes sur le port <strong>9100</strong>';
$lang['print_recommandations']              = "Sur l\&#39;installation locale <strong>PHP Server</strong> sera le meilleur choix et pour le serveur en direct, vous pouvez installer <strong>PHP Pos Print Server</strong> localement (recommended) ou utiliser la fonction d\&#39;impression par navigateur Web.";
$lang['printer_path_tip']                   = "<strong>Pour Windows:</strong> (Local USB, Imprimante série ou parallèle): Partagez l\&#39;imprimante et entrez le nom de partage de votre imprimante ici ou pour SMB (Server Message Block): entrez en tant que smb:// url format tel que <code>smb://computername/Receipt Printer</code><br><strong>Pour Linux:</strong> Parallèle comme<code>/dev/lp0</code>, USB as <code>/dev/usb/lp1</code>, USB-Serial as <code>/dev/ttyUSB0</code>, Serial as <code>/dev/ttyS0</code><br>";
