<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<head>
	<title>Directories</title>
<style>
body  {font-family:verdana, Arial, helvetica; font-size:12px; background-color:#fff; color: blue;}
</style>
</head>
	<body>
		<h2 style="text-color:pink;"><xsl:value-of select="/directories/directory/name"/></h2>
	</body>
</html>
</xsl:template>
</xsl:stylesheet>