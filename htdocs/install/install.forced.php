<?php
/* Copyright (C) 2016       Raphaël Doursenaud      <rdoursenaud@gpcsolutions.fr>
 * Copyright (C) 2024       Yann Le Doaré      		<services@linuxconsole.org>
 * Copyright (C) 2025       Charlene Benke      	<charlene@patas-monkey.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

/** @var boolean	$force_install_distrib	 		Set the way the installis done to "custom" value */
/** @var boolean	$force_install_nophpinfo 		Hide PHP information */
$force_install_nophpinfo = true;

/** @var int	$force_install_noedit 				1 = Lock and hide environment variables, 2 = Lock all set variables */
$force_install_noedit = 2;

/** @var string	$force_install_message	 			Information message to add on the page to setup parameters */
$force_install_message = 'Bem vindo a central de instalação do Lab Connecta...';


/** @var bool $force_install_lockinstall			Force install locking */
$force_install_lockinstall = true;

/** @var string $force_install_module				Enable module(s) (Comma separated class names list, example: modSociete,modFournisseur,modFacture) */
$force_install_module = 'modFacture, modSociete, modLabApp, modNFSe, modNFe';
