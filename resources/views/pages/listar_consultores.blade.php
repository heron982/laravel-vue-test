@extends('layouts.app')
@section('content')
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
    <TBODY>
    <TR>
      <TD width="100%" colSpan=3 height=10><IMG
        src="inc/spacer.gif"
        width=10></TD></TR>
    <TR>
      <TD noWrap width=10><IMG
        src="inc/spacer.gif"
        width=10></TD>
      <TD width="100%">
        <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
          <TBODY>
          <TR>
            <TD style="BORDER-BOTTOM: #ccc 1px solid">&nbsp;</TD>
            <TD width=98 background="" height=40 rowSpan=2><A
              href="http://www.agence.com.br/" target=_blank><IMG alt=""
              src="{{ asset('inc/logo.gif') }}"
              border=0></A></TD></TR>
          <TR>
            <TD
            style="PADDING-RIGHT: 3px; PADDING-LEFT: 3px; PADDING-BOTTOM: 3px; BORDER-LEFT: #ccc 1px dotted; PADDING-TOP: 3px"><IMG
              height=15 alt=""
              src="{{ asset('inc/fig.gif') }}"
              width=51 border=0></TD></TR></TBODY></TABLE></TD>
      <TD noWrap width=10><IMG
        src="{{ asset('inc/spacer.gif') }}"
        width=10></TD></TR>
    <TR>
      <TD width="100%" colSpan=3 height=10><IMG
        src="{{ asset('inc/spacer.gif') }}"
        width=10></TD></TR>
    <TR>
      <TD noWrap width=10><IMG
        src="{{ asset('inc/spacer.gif') }}"
        width=10></TD>
      <TD width="100%">&nbsp;</TD>
      <TD noWrap width=10><IMG
        src="{{ asset('inc/spacer.gif') }}"
        width=10></TD></TR></TBODY></TABLE>
  <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
    <TBODY>
    <TR>
      <TD noWrap width=10><IMG
        src="{{ asset('inc/spacer.gif') }}"
        width=10></TD>
      <TD width="100%">
        <table cellspacing=0 cellpadding=0 width="100%" border=0>
          <tr>
            <td class=index style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px" valign=top><table border="0" width="100%" cellspacing="0" cellpadding="0">
                  <tr>
                    <!--

      Para as abas ficarem com o visual apresentado na p&aacute;gina, &eacute; necess&aacute;rio colocar os inputs
      dentro de uma tabela. Essa tabela faz o papel de grade e gera algumas linhas pra completar
      o layout.

      Importante:
      Note the a c&eacute;lula onde consta o botao principal (selecionado) n&atilde;o leva a classe CEL_TAB.

      Recomendo criar uma funcao/classe para gerar essas Abas com esse layout.

      -->
                    <td nowrap valign="bottom" align="center" class="cel_tab" height="35"><input type="submit" value name="nothing2" class="nothing">
  &nbsp;&nbsp;</td><form action="con_desempenho.htm">
                    <td nowrap valign="bottom" align="center"><span class="cel_tab">
                      <input type="submit" value="Por Consultor" name="act22223" class="tab_current">
                    </span></td>
                    </form>
                    <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;&nbsp;</td>
                    <form action="con_desempenho_aba_cliente.htm">
                    <td nowrap valign="bottom" align="center"><input type="submit" value="Por Cliente" name="act2" class="tab">                  </td>
                    </form>
                    <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;&nbsp;</td>
                    <form action="cadastro_boleto_carregado_cancelado.htm">
                    <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;</td>
                    </form>
                    <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;&nbsp;</td>
                    <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;</td>
                    <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;&nbsp;</td>
                    <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;</td>
                    <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;&nbsp;</td>
                    <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;</td>
                    <td valign="bottom" class="cel_tab" width="100%">&nbsp;</td>
                  </tr>
                </table>
                <br>
                <table width="100%" cellpadding="3" cellspacing="1"
                    bgcolor="#cccccc"  id="pesquisaAvancada">
                  <tbody>
                    <tr bgcolor="#fafafa">
                      <td width="10%" nowrap="nowrap" bgcolor="#efefef"><div align="right"><strong>Per&iacute;odo</strong></div></td>
                      <td><font color="black">
                        <select name="select5">
                          <option selected>Jan
                          <option>Fev
                          <option>Mar
                          <option>Abr
                          <option>Mai
                          <option>Jun
                          <option>Jul
                          <option>Ago
                          <option>Set
                          <option>Out
                          <option>Nov
                          <option>Dez
                        </select>
                        <select name="select">
                          <option>2003
                          <option>2004
                          <option>2005</option>
                                      <option>2006</option>
                                      <option selected>2007</option>
                        </select>
                        a
                        <select name="select3">
                          <option>Jan
                          <option selected>Fev
                          <option>Mar
                          <option>Abr
                          <option>Mai
                          <option>Jun
                          <option>Jul
                          <option>Ago
                          <option>Set
                          <option>Out
                          <option>Nov
                          <option>Dez
                        </select>
                        <select name="select4">
                          <option>2003
                          <option>2004
                          <option>2005</option>
                  <option>2006</option>
                  <option selected>2007</option>
                        </select>
                      </font></td>
                      <td width="20%" rowspan="2"><div align="center"><font color="black">
                          <form action="con_desem_consultor_rel.htm">
                            <input style="BORDER-RIGHT: 1px outset; BORDER-TOP: 1px outset; FONT-SIZE: 8pt; BACKGROUND-POSITION-Y: center; LEFT: 120px; BACKGROUND-IMAGE: url(img/icone_relatorio.png); BORDER-LEFT: 1px outset; WIDTH: 110px; BORDER-BOTTOM: 1px outset; BACKGROUND-REPEAT: no-repeat; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px; BACKGROUND-COLOR: #CCCCCC" type="submit" value="Relat&oacute;rio" name="btSalvar22" />
                          </form>
                        <form action="con_desem_consultor_graf.htm">
                          <input style="BORDER-RIGHT: 1px outset; BORDER-TOP: 1px outset; FONT-SIZE: 8pt; BACKGROUND-POSITION-Y: center; LEFT: 120px; BACKGROUND-IMAGE: url(img/icone_grafico.png); BORDER-LEFT: 1px outset; WIDTH: 110px; BORDER-BOTTOM: 1px outset; BACKGROUND-REPEAT: no-repeat; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px; BACKGROUND-COLOR: #CCCCCC" type="submit" value="Gr&aacute;fico" name="btSalvar222" />
                        </form>
                        <form action="con_desem_consultor_pizza.htm">
                          <input style="BORDER-RIGHT: 1px outset; BORDER-TOP: 1px outset; FONT-SIZE: 8pt; BACKGROUND-POSITION-Y: center; LEFT: 120px; BACKGROUND-IMAGE: url(img/icone_pizza.png); BORDER-LEFT: 1px outset; WIDTH: 110px; BORDER-BOTTOM: 1px outset; BACKGROUND-REPEAT: no-repeat; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px; BACKGROUND-COLOR: #CCCCCC" type="submit" value="Pizza" name="btSalvar222" />
                        </form>
                      </font></div></td>
                    </tr>
                    <tr bgcolor="#fafafa">
                      <td nowrap="nowrap" bgcolor="#efefef"><div align="right"><strong>Consultores</strong></div></td>
                      <td><table align="center">
                          <tr>
                            <td><select multiple size="8" name="list1" id="list1" style="width:280">

  <option value="aline.chastel" >Aline Chastel Lima</option>

  <option value="bruno.freitas" >Bruno Sousa Freitas</option>
  <option value="contato" >Carlos Cezar Gir�o de Arruda</option>
  <option value="carlos.arruda" >Carlos Fl�vio Gir�o de Arruda</option>
  <option value="carlos.carvalho" >Carlos Henrique de Carvalho Filho</option>
  <option value="felipe.chahad" >Felipe Chahad</option>

  <option value="silvio.maraes" >Silvio Mar�es Ferreira</option>
                              </select>
                            </td>
                            <td align="center" valign="middle"><input name="button" type="button" onClick="move(list1,list2)" value=">>">
                                <br>
                                <input name="button" type="button" onClick="move(list2,list1)" value="<<">
                            </td>
                            <td><select multiple size="8" name="list2" id="list2" style="width:280">
  <option value="anapaula.chiodaro" >Ana Paula Fontes Martins Chiodaro</option>
  <option value="renato.pereira" >Renato Marcus Pereira</option>
                              </select>
                                <input type="hidden"  name="lista_analista" value="">
                            </td>
                          </tr>
                      </table></td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <table cellspacing=1 cellpadding=3 width="100%"
                    bgcolor=#cccccc  id="pesquisaAvancada">
                  <tbody>
                    <tr bgcolor=#efefef>
                      <td colspan=5><span class="style3">Ana Paula Fontes Martins Chiodaro</span> </td>
                    </tr>
                    <tr bgcolor=#fafafa>
                      <td nowrap><div align="center"><strong>Per&iacute;odo</strong></div></td>
                      <td><div align="center"><strong>Receita L&iacute;quida </strong></div></td>
                      <td><div align="center"><strong>Custo Fixo </strong></div></td>
                      <td><div align="center"><strong>Comiss&atilde;o</strong></div></td>
                      <td><div align="center"><strong>Lucro</strong></div></td>
                    </tr>
                    <tr bgcolor=#fafafa>
                      <td nowrap>Janeiro de 2007</td>
                      <td><div align="right">R$ 1.500,00</div></td>
                      <td><div align="right">- R$ 2.000,00</div></td>
                      <td><div align="right">- R$ 1.000,00</div></td>
                      <td><div align="right"><font color="#FF0000">- R$ 1.500,00</font></div></td>
                    </tr>
                    <tr bgcolor=#fafafa>
                      <td nowrap>Fevereiro de 2007 </td>
                      <td><div align="right">R$ 25.000,00</div></td>
                      <td><div align="right">- R$ 2.000,00</div></td>
                      <td><div align="right">- R$ 2.500,00</div></td>
                      <td><div align="right">R$ 20.500,00</div></td>
                    </tr>
                    <tr bgcolor=#efefef>
                      <td nowrap bgcolor="#efefef"><strong>SALDO</strong></td>
                      <td><div align="right"><font color="#000000">R$ 26.500,00</font></div></td>
                      <td><div align="right"><font color="#000000">- R$ 4.000,00</font></div></td>
                      <td><div align="right"><font color="#000000">- R$ 3.500,00</font></div></td>
                      <td><div align="right"><font color="#0000FF">R$ 19.000,00</font></div></td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <table cellspacing=1 cellpadding=3 width="100%"
                    bgcolor=#cccccc  id="pesquisaAvancada">
                  <tbody>
                    <tr bgcolor=#efefef>
                      <td colspan=5><span class="style3">Renato Marcus Pereira </span></td>
                    </tr>
                    <tr bgcolor=#fafafa>
                      <td nowrap><div align="center"><strong>Per&iacute;odo</strong></div></td>
                      <td><div align="center"><strong>Receita L&iacute;quida </strong></div></td>
                      <td><div align="center"><strong>Custo Fixo </strong></div></td>
                      <td><div align="center"><strong>Comiss&atilde;o</strong></div></td>
                      <td><div align="center"><strong>Lucro</strong></div></td>
                    </tr>
                    <tr bgcolor=#fafafa>
                      <td nowrap>Janeiro de 2007</td>
                      <td><div align="right">R$ 1.500,00</div></td>
                      <td><div align="right">- R$ 2.000,00</div></td>
                      <td><div align="right">- R$ 1.000,00</div></td>
                      <td><div align="right"><font color="#FF0000">- R$ 1.500,00</font></div></td>
                    </tr>
                    <tr bgcolor=#fafafa>
                      <td nowrap>Fevereiro de 2007 </td>
                      <td><div align="right">R$ 25.000,00</div></td>
                      <td><div align="right">- R$ 2.000,00</div></td>
                      <td><div align="right">- R$ 2.500,00</div></td>
                      <td><div align="right">R$ 20.500,00</div></td>
                    </tr>
                    <tr bgcolor=#efefef>
                      <td nowrap bgcolor="#efefef"><strong>SALDO</strong></td>
                      <td><div align="right"><font color="#000000">R$ 26.500,00</font></div></td>
                      <td><div align="right"><font color="#000000">- R$ 4.000,00</font></div></td>
                      <td><div align="right"><font color="#000000">- R$ 3.500,00</font></div></td>
                      <td><div align="right"><font color="#0000FF">R$ 19.000,00</font></div></td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <p><br>
                </p>
                <p>&nbsp;    </p></td>
          </tr>
        </table></TD>
      <TD noWrap width=10><IMG
        src="{{ asset('inc/spacer.gif') }}"
        width=10></TD></TR></TBODY></TABLE>
@endsection
