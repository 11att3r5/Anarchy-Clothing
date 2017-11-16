<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<head>
<title>Directories</title>
</head>
<body style="color: blue;">
<xsk:for-each select="directories/directory">
<h2 style="text-color:pink;"><xsl:value-of select="name"/></h2>
</xsk:for-each>
</body>
</html>
</xsl:template>
</xsl:stylesheet>