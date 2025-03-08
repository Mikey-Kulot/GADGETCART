package com.example.gadgetcart.Adapter

import android.content.Context
import android.content.Intent
import android.os.Handler
import android.view.LayoutInflater
import android.view.ViewGroup
import androidx.recyclerview.widget.RecyclerView
import com.bumptech.glide.Glide
import android.view.View
import com.example.gadgetcart.*
import com.example.gadgetcart.databinding.CategoriesBinding
import com.example.gadgetcart.model.Category

class CategoryAdapter(
    private val context: Context,
    private val categoryItems: List<Category>
) : RecyclerView.Adapter<CategoryAdapter.CategoryViewHolder>() {

    private var selectedPosition = RecyclerView.NO_POSITION
    private var lastClickTime: Long = 0
    private val doubleClickThreshold = 300L

    inner class CategoryViewHolder(val binding: CategoriesBinding) :
        RecyclerView.ViewHolder(binding.root) {

        fun bind(categoryItem: Category, isSelected: Boolean) {
            Glide.with(binding.root.context)
                .load(categoryItem.imageResId)
                .into(binding.ivCategory)

            binding.tvCategory.text = categoryItem.name

            binding.tvCategory.visibility = if (isSelected) View.VISIBLE else View.GONE

            binding.categoryContainer.setBackgroundResource(
                if (isSelected) R.drawable.blue_bg_selected else R.drawable.grey_bg
            )
        }
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): CategoryViewHolder {
        val binding = CategoriesBinding.inflate(LayoutInflater.from(parent.context), parent, false)
        return CategoryViewHolder(binding)
    }

    override fun onBindViewHolder(holder: CategoryViewHolder, position: Int) {
        val categoryItem = categoryItems[position]
        holder.bind(categoryItem, position == selectedPosition)

        holder.itemView.setOnClickListener {
            val currentTime = System.currentTimeMillis()

            if (currentTime - lastClickTime < doubleClickThreshold) {
                goToActivity(categoryItem)
            } else {
                val previousSelectedPosition = selectedPosition
                selectedPosition = holder.bindingAdapterPosition

                notifyItemChanged(previousSelectedPosition)
                notifyItemChanged(selectedPosition)
            }

            lastClickTime = currentTime
        }
    }

    private fun goToActivity(categoryItem: Category) {
        val intent = when (categoryItem.name) {
            "Cellphone" -> Intent(context, CellphoneActivity::class.java)
            "Tablet" -> Intent(context, TabletActivity::class.java)
            "Computer" -> Intent(context, ComputerActivity::class.java)
            "Laptop" -> Intent(context, LaptopActivity::class.java)
            "Accessories" -> Intent(context, AccessoriesActivity::class.java)
            "Smartwatch" -> Intent(context, SmartwatchesActivity::class.java)
            "Drones" -> Intent(context, DronesActivity::class.java)
            else -> null
        }
        intent?.let { context.startActivity(it) }
    }

    override fun getItemCount(): Int = categoryItems.size
}
