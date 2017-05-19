<?php
function assets($path) {
	return rtrim(PUBLIC_DIR, '/') . '/' . ltrim($path, '/');
}
