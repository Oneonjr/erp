<?php

/**
 * demo.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    'no_demo_text'           => 'ขออภัย เราไม่มีข้อมูลอธิบายสำหรับ<abbr title=":route">หน้านี้</abbr>',
    'see_help_icon'          => 'However, the <i class="bi bi-question-circle"></i>-icon in the top right corner may tell you more.',
    'index'                  => 'ยินดีต้อนรับเข้าสู่ <strong>Firefly III</strong>! ในหน้านี้แสดงรายละเอียดทางการเงินอย่างรวดเร็วให้คุณรับชม สำหรับรายละเอียดเพิ่มเติม สามารถดูได้ที่บัญชี &rarr; <a href=":asset"> บัญชีสินทรัพย์ </a> และแน่นอน จะมีส่วนของหน้า <a href=":budgets"> งบประมาณ </a> และหน้า <a href=":reports"> รายงาน </a> หรือ คุณสามารถที่จะดูทุกเมนูได้ตามสบาย',
    'accounts-index'         => 'บัญชีทรัพย์สินคือบัญชีส่วนตัวของคุณ, ส่วนบัญชีค่าใช้จ่ายคือบัญชีสำหรับให้คุณทำการสร้างรายจ่ายขึ้นมาในบัญชีนี้ เช่น การเก็บเงิน หรือ ให้เพื่อน เป็นต้น, บัญชีรายได้คือบัญชีที่ได้รับเงินจากส่วนต่างๆ เช่น เงินได้จากงานของคุณ, เงินได้จากภาครัฐ หรือ รายรับอื่นๆ, ส่วนบัญชีหนี้สิน คือ บัญชีสำหรับกรณีมีหนี้ และ การกู้ยืมต่างๆ เช่น หนี้จากบัตรเครดิต หรือ หนี้จากกองทุนยืมเรียน ซึ่งในหน้านี้คุณสามารถแก้ไขหรือลบได้',
    'budgets-index'          => 'หน้านี้แสดงภาพรวมงบประมาณของคุณ แถบด้านบนแสดงจำนวนเงินที่สามารถจัดงบประมาณได้ ซึ่งสามารถปรับแต่งในช่วงเวลาใดก็ได้โดยคลิกจำนวนเงินทางด้านขวา จำนวนเงินที่คุณใช้จ่ายจริงจะแสดงอยู่ในแถบด้านล่าง ด้านล่างนี้คือค่าใช้จ่ายต่องบประมาณและสิ่งที่คุณตั้งงบประมาณไว้',
    'reports-index-start'    => 'Firefly III supports a number of types of reports. Read about them by clicking on the <i class="bi bi-question-circle"></i>-icon in the top right corner.',
    'reports-index-examples' => 'ลองดูตัวอย่างของเรา: <a href=":one">รายละเอียดการเงินรายเดือน</a>, <a href=":two">รายละเอียดการเงินรายปี</a> และ <a href=":three">รายละเอียดงบประมาณโดยรวม</a>',
    'currencies-index'       => 'Firefly III รองรับค่าเงินหลายประเภท ถึงแม้ว่าค่าเงินเดิมจะตั้งค่าไว้ที่ Euro สามารถที่จะเปลี่ยนเป็น US Dollar ได้ หรือค่าเงินอื่นๆได้ โดยคุณจะเห็นหน้าของการตั้งค่าสกุลเงิน โดยจะมีค่าเงินต่างๆ อยู่แล้ว ซึ่งคุณสามารถเพิ่มค่าเงินของคุณเข้าไปได้ โดยที่การเปลี่ยนค่าเงินตั้งต้น จะไม่ส่งผลต่อการเปลี่ยนค่าเงินในธุรกรรมที่ถูกบันทึกไปก่อนหน้านี้ อย่างไรก็ตาม Firefly III รองรับค่าเงินหลายประเภทในเวลาเดียวกัน',
    'transactions-index'     => 'ค่าใช้จ่าย, รายได้ และ รายการโอน ไม่ใช่สิ่งที่สมมติขึ้นมา แต่เกิดจากการสร้างโดยอัตโนมัติ',
    'piggy-banks-index'      => 'อย่างที่คุณเห็น, เรามีกระปุกออมสินอยูา 3 ใบ โดยที่คุณสามารถเพิ่มหรือลดจำนวนเงินในแต่ละกระปุกออมสินจากปุ่ม คลิ๊กที่ชื่อของกระปุกออมสินเพื่อที่เห็นรายละเอียดของแต่ละกระปุกออมสิน',
    'profile-index'          => 'Keep in mind that the demo site resets every four hours. Standard user agents (curl, Postman, wget) are blocked. Your access may be revoked at any time. This happens automatically and is not a bug.',
];
