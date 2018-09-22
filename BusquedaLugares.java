package com.example.user.finalbiblioteca;

import android.annotation.SuppressLint;
import android.os.StrictMode;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import java.sql.Connection;
import java.sql.Driver;
import java.sql.DriverManager;
import java.sql.PreparedStatement;

public class MainActivity extends AppCompatActivity {
    EditText edtLugar;
    Button btnConsultar;
    @SuppressLint("WrongViewCast")
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        edtLugar = (EditText)findViewById(R.id.edtLugar);
        btnConsultar = (Button) findViewById(R.id.btnConsultar);
        btnConsultar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                hacerConsulta();
            }
        });
    }
    public Connection conexionSql(){
        Connection conexion = null;
        Toast.makeText(getApplicationContext(),"Entro",Toast.LENGTH_SHORT).show();
        try{

            StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder().permitAll().build();
            StrictMode.setThreadPolicy(policy);
            Class.forName("net.sourceforge.jtds.jdbc.Driver").newInstance();
            conexion = DriverManager.getConnection("jdbc:jtds:sqlserver://192.168.1.69;databaseName=biblioteca;username=root;password=pcwYCR18");
        }
        catch (Exception e){
            Toast.makeText(getApplicationContext(),e.getMessage(),Toast.LENGTH_SHORT).show();

        }
        return conexion;
    }
    public void hacerConsulta(){
        try{
            PreparedStatement pst = conexionSql().prepareStatement("insert, into usuarios values(?,?)");
            pst.setString(1,edtLugar.getText().toString());
            Toast.makeText(getApplicationContext(),"Consulta realizada",Toast.LENGTH_SHORT).show();

        }
        catch (Exception e){
            Toast.makeText(getApplicationContext(),e.getMessage(),Toast.LENGTH_SHORT).show();
        }
    }
}