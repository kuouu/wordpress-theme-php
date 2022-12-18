<?php
if ($wp->request == 'about') {
  get_template_part('about');
} else {
  get_template_part('main');
}
