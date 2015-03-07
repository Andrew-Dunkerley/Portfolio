<?xml version="1.0"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
    <h2>User</h2>
    <table border="1">
      <tr bgcolor="#9acd32">
        <th>User ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
      </tr>
      <xsl:for-each select="Users/User">
        <tr>
          <td><xsl:value-of select="userid"/></td>
          <td><xsl:value-of select="username"/></td>
          <td><xsl:value-of select="password"/></td>
          <td><xsl:value-of select="email"/></td>
        </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>