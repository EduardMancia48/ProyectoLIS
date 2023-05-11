using Clases.ApiRest;
using Newtonsoft.Json;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Net.Http;
using System.Net.NetworkInformation;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Clases
{
    public partial class Form1 : Form
    {
        DBApi dBApi = new DBApi();
        public Form1()
        {
            InitializeComponent();
        }

        private void btnPrueba_Click(object sender, EventArgs e)
        {
            dynamic respuesta=dBApi.Get("http://127.0.0.1:8000/api/ventas/" + cod_cupon.Text+"/"+ txtDUI.Text);
            txtNombreGET.Text = respuesta.nombres.ToString();
            txtApellidoGET.Text = respuesta.apellidos.ToString();
            txt_desc.Text = respuesta.titulo_oferta.ToString();
            label_inicio.Text=respuesta.fecha_inicio.ToString();
            label_fin.Text = respuesta.fecha_fin.ToString();
            txt_estado.Text = respuesta.estado.ToString();
            



        }

        private void btnPost_Click(object sender, EventArgs e)
        {
            
        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private async void btn_canjear_Click(object sender, EventArgs e)
        {
            string url = "http://127.0.0.1:8000/api/ventas/" + cod_cupon.Text;
            var client = new HttpClient();
            HttpContent content = null;
            var httpResponse = await client.PutAsync(url,content);
            if (httpResponse.IsSuccessStatusCode)
            {
                var result = await httpResponse.Content.ReadAsStringAsync();
                MessageBox.Show("Su cupon "+cod_cupon.Text+" ha sido canjeado Correctamente", "Aviso");
            }
            
        }

        private void groupBox1_Enter(object sender, EventArgs e)
        {

        }

        private void pictureBox5_Click(object sender, EventArgs e)
        {

        }
    }

    public class Persona
    {
        public string name { get; set; }
        public string job { get; set; }
    }
}

