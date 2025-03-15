package com.example.gadgetcart.retrofitutil

import com.example.gadgetcart.model.ApiResponse
import retrofit2.Call
import retrofit2.http.Field
import retrofit2.http.FormUrlEncoded
import retrofit2.http.POST

interface ApiInterface {

    @FormUrlEncoded
    @POST("register.php")
    fun performUserSignIn(
        @Field("username") userName: String,
        @Field("password") password: String,
        @Field("conf_password") confPassword: String,
        @Field("email") email: String
    ): Call<ApiResponse>

    @FormUrlEncoded
    @POST("login.php")
    fun performUserLogin(
        @Field("username") userName: String,
        @Field("password") password: String
    ): Call<ApiResponse>
}