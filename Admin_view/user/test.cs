<Window.Resources>
  <ControlTemplate x:Key="Template_btn" TargetType="button">
    <Grid>
      <Ellipse Fill="YellowGreen" />
      <ControlPresenter HorizontalAlignment="Center" VerticalAlignment="Center"/>
    </Grid>
  </ControlTemplate>
  <Style TargetType="{x:Type DataGridColumnHeader}">
    <Setter Property="HorizontalContentAlignment" value="Center"/>
    <Setter Property="FontWeight" value="Bold"/>
  </Style>
</Window.Resources>

// Button
<Button Template="{StaticResource Template_btn}"/>

// TextBox
<Textbox Text={Binding SelectedItem.Mabn, ElementName=ListBN, Mode=OneWay}/>

// Lay ma kho tu list
var item = ListBN.SelectedItem;
if(item != null) {
  var maKhoa = (listBN.SelectedCells[2].Column.GetContent(item) as TextBlock).Text
} 
